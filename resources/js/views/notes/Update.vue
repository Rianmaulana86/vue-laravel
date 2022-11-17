<template>

    <div class="container">
        Home Page
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">


                <div class="card">
                    <div class="card-header">Create new Note</div>
                    <div class="card-body">
                        <form  method="post" @submit.prevent="store">

                                <div class="form-group">
                                    <label for="title">title</label>
                                    <input type="text" id="title" v-model="form.title" class="form-control">
                                    <div v-if="theErrors.title" class="mt-2 text-danger">{{ theErrors.title[0] }}</div>
                                </div>


                                <div class="form-group">
                                    <label for="subject">subject</label>
                                    <select v-model="form.subject" class="form-select" id="subject">
                                        <option :key="subject.id" :value="subject.id" v-for="subject in subjects">
                                        
                                            {{ subject.name }}
                                        
                                        </option>
                                    </select>
                                    <div v-if="theErrors.subject" class="mt-2 text-danger">{{ theErrors.subject[0] }}</div>
                                </div>

                                <div class="form-group">

                                    <label for="description">Description</label>
                                    <textarea v-model="form.description" id="description" class="form-control"  rows="5"></textarea>
                                    <div v-if="theErrors.description" class="mt-2 text-danger">{{ theErrors.description[0] }}</div>
                                </div>

                                
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>



                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


</template>

<script>

    export default {

    }


</script>


<style>





</style>