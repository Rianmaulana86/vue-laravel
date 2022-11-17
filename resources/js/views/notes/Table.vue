<template>

    <div class="container">

        <h3>Table of Notes</h3>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>title</th>
                        <th>subject</th>
                        <th>published</th>
                        <th class="text-center">action</th>

                    </tr>
                </thead>


                <tbody>

                    <tr v-for="note in notes" :key="note.id">
                    
                                <td>{{ note.title }}</td>
                                <td>{{ note.subject }}</td>
                                <td>{{ note.published }}</td>
                                <td class="text-center">
                                    <router-link :to="{    name: 'show.notes', params: { noteSlug: note.slug }    }" class="btn btn-success">Show</router-link>
                                    <router-link :to="{    name:    'edit.notes', params: { noteSlug: note.slug}         }" class="btn btn-primary">Edit</router-link>
                                    
                                    <delete-note class="d-inline"  :endpoint="note.slug"></delete-note>
                                </td>



                    </tr>


                </tbody>


            </table>
        </div>
    </div>


</template>

<script>
import axios from 'axios';
import DeleteNote from './Delete'


    export default {

        components: {
            'DeleteNote': DeleteNote
        },

        data() {
            return {
                notes: [],
            }
        },



        mounted() {

        this.getNote()

        },

        methods: {
            async getNote() {
                let {data}= await axios.get('/api/');
                this.notes = data.data
            }
        }



    }

    


</script>


<style>





</style>