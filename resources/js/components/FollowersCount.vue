<template>

     <strong v-text="followersUser"></strong>

</template>

<script>
    export default {
        props: 'followers',
        mounted() {
            console.log('Component mounted.')
        },

     data: function(){
            return{
                status: this.followers,
            }
        },
             computed:{
                followersUser()
                {
                    return this.followers;
                }
            }
            }
    </script>