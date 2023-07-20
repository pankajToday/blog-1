<template>
    <h1 class="text-3xl font-bold underline">
        Hello world! hi
    </h1>

     <img class="h-8 w-24" :src="asset('project-assets/img/bg-masthead.jpg')">
</template>
<script>

    import Swal from 'sweetalert2'
    export default {
        name: "MainPage",
        components: { },
        props:[],
        data(){
            return{
               // authUser:this.$page.props.auth.user,

            }
        },
        methods:{
            update(item){
                axios.post('/api/subscription-update/',this.plan).then(response => {
                    if (response.status === 200) {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Plan updated successfully!',
                            // showConfirmButton: false,
                            timer: 1500
                        });
                        this.$inertia.get('subscription-list');
                    }
                }).catch((error) => {
                    if (error.response.status === 500) {
                        Swal.fire(
                            'Oops!',
                            'Unable To update Plan!'
                        )
                    }
                    console.log(error.response.data.errors)
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors;
                    }
                })
            },
            destroy (id) {
                Swal.fire({
                    title: 'Are you sure?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.post('/api/subscription-delete/'+id).then(response => {
                            if (response.status === 200) {
                                Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    title: 'Plan Deleted successfully!',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                this.$inertia.get('subscription-list');
                            }
                        }).catch((error) => {
                            if (error.response.status === 500) {
                                Swal.fire(
                                    'Oops!',
                                    'Unable To Delete Plan!'
                                )
                            }
                        })
                    }
                });

            },


        },
        created(){
            //console.log(this.authUser)
        }
    }
</script>

<style scoped>
    .switch {
        position: relative;
        display: inline-block;
        width: 36px;
        height: 18px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 15px;
        width: 15px;
        left: 4px;
        bottom: 1.7px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #0075FF;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #0075FF;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(24px);
        -ms-transform: translateX(15px);
        transform: translateX(15px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>
