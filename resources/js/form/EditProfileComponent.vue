<template>
    <v-app>
        <v-main>
            <v-row
                justify='center'
            >
                <v-card
                    flat
                    width='540'
                    outlined
                >
                    <v-card-title>
                        プロフィール編集
                    </v-card-title>
                    <!--<input-->
                    <!--    type='file'-->
                    <!--    accept='image/jpeg, image/png'-->
                    <!--    @change='onChangeImage'-->
                    <!-- />-->
                    <v-text-field
                        type='name'
                        name='name'
                        label='New User Name'
                        outlined
                        v-model='userForm.name'
                        :rules='emailRules'
                    ></v-text-field>
                    <v-text-field
                        type='email'
                        name='email'
                        label='New E-Mail Adress'
                        outlined
                        v-model='userForm.email'
                    ></v-text-field>
                    <!--<v-text-field-->
                    <!--    type='text'-->
                    <!--    name='profile'-->
                    <!--    label='Profile Message'-->
                    <!--    outlined-->
                    <!--    v-model='userForm.profile'-->
                    <!-- ></v-text-field>-->
                    <v-btn
                        dark
                        @click='editProfile'
                    >
                        登録
                    </v-btn>
                </v-card>
            </v-row>
        </v-main>
    </v-app>
</template>

<script>
    export default {
        data() {
            return{
                userForm:{}
            }
        },
        methods:{
            showLoginForm(){
                this.flag = 0;
            },
            showRegisterForm(){
                this.flag = 1;
            },
            editProfile(){
                axios({
                    url:`/users/${this.$route.params.id}/edit-profile`,
                    method:'post',
                    data:{
                        userForm:this.userForm
                    }
                }).then(response=>{
                    if(response.status != 200){
                        return;
                    }
                    this.$router.push(`/mypage/${this.$route.params.id}`);
                })
            },
        }
    }
</script>
