<template>
     <HeadTag  />
     <HeaderNav :title="headerTitle" />
     <TopSlider />
     <MainPostSection />
     <FooterSection :title="headerTitle"/>


     <!--<img class="w-[100%] h-[50%]" :src="asset('project-assets/img/bg-masthead.jpg')">-->
</template>

<script>
    import Swal from 'sweetalert2';
    import  HeadTag from './website/Main/Component/Head.vue';
    import  HeaderNav from './website/Main/Component/Header.vue';
    import  TopSlider from './website/Main/Component/TopSliderSection.vue';
    import  MainPostSection from './website/Main/Component/MainPost.vue';
    import  CategoryPostSection from './website/Main/Component/CategoryPost.vue';
    import  FooterSection from './website/Main/Component/Footer.vue';

    export default {
        name: "MainPage",
        components: {HeadTag ,HeaderNav,TopSlider,MainPostSection,CategoryPostSection,FooterSection },
        props:['title'],
        data(){
            return{
               // authUser:this.$page.props.auth.user,
                headerTitle :'US Celebrities',
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

</style>
