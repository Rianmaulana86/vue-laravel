<template>

    <div class="container">
        <h1>{{ note.title }}</h1>
        <hr>
        <div class="mb-3">
        {{ note.published }} - {{ note.subject }}
        </div>

        {{ note.description }}

    </div>


</template>

<script>
import axios from 'axios';


    export default {

        data ()
        {
            return {
                note: [],
            }
        },

        mounted () {

            this.getNote()
            
        },



        methods: {


            async getNote() {
                let {data} = await axios.get('/api/detail-note/' + this.$route.params.noteSlug)
                this.note = data.data
            }

        }

        

    }


</script>


<style>





</style>