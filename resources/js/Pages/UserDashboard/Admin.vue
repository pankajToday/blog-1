<template>

        <h1 class="m-4 text-red-500"> Home  Page </h1>
        <br>
        <p>
           User Name : {{authUser.first_name}} {{authUser.last_name}}
        </p>
    <a  @click="logout" class="bg-gray-100 text-black py-2 px-2 m-5">Logout</a>

</template>

<script>
export default {
    name: "Dashboard",
    components: {},
    data(){
        return{
            authUser:this.$page.props.auth.user
        }
    },
    methods:{
        logout(){
            axios.post('/logout').then( (resolve) =>{
                if( resolve.status == 204 )
                {
                    this.$inertia.get('login');
                }
                console.log('User logout');
            });
        }
    },
    computed:{
        name(){
            return this.$page.props.auth.user.first_name + ' ' +  this.$page.props.auth.user.last_name;
        }
    },

}
</script>

<style scoped>

</style>
