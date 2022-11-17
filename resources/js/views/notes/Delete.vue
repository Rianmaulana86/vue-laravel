<template>

    <div>
        <button ref="deleteNote" @click="destroyNote" class="btn btn-danger">Delete</button>
    </div>


</template>

<script>

    export default {

        props: ['endpoint'],

        methods: {
            async destroyNote() {
                let q = window.confirm("are you sure ?");

                if (q == true) {
                    let response = await axios.delete(`/api/delete-note/${this.endpoint}`);

                    if (response.status == 200)

                    {
                        this.$toasted.show(response.data.message, {
                            type: 'success',

                            duration: 3500,
                        })
                             console.log(this.$refs.deleteNote.parentNode.parentNode.parentNode.remove());
                    } 
                }
            }
        }

    }


</script>


<style>





</style>