<template>
    <v-app>
        <v-spacer></v-spacer>
        <v-main>
            <v-row
                v-if='flag == 0'
                justify='center'
            >
                <v-card
                    flat
                    width='540'
                    outlined
                >
                    <v-card-title>
                        ログイン
                    </v-card-title>
                    <v-text-field
                        type='email'
                        name='email'
                        label='E-Mail Adress'
                        outlined
                        v-model='email'
                        :rules='emailRules'
                    ></v-text-field>
                    <v-text-field
                        type='password'
                        name='password'
                        label='Password'
                        outlined
                        v-model='password'
                        :rules='passwordRules'
                    ></v-text-field>
                    <v-btn
                        dark
                        @click='login'
                    >
                        ログイン
                    </v-btn>
                </v-card>
            </v-row>
            <v-row
                v-if='flag == 0'
                justify='center'
            >
                <v-card
                    flat
                    width='540'
                    outlined
                >
                    <v-card-title>
                        未登録の方はこちら
                    </v-card-title>
                    <v-btn dark @click='showRegisterForm'>新規登録</v-btn>
                </v-card>
            </v-row>
            <v-row
                v-if='flag == 1'
                justify='center'
            >
                <v-card
                    flat
                    width='540'
                    outlined
                >
                    <v-card-title>
                        新規登録
                    </v-card-title>
                    <v-text-field
                        type='text'
                        name='name'
                        label='User Name'
                        outlined
                        v-model='name'
                        :rules='userNameRules'
                    ></v-text-field>
                    <v-text-field
                        type='email'
                        name='email'
                        label='E-Mail Adress'
                        outlined
                        v-model='email'
                        :rules='emailRules'
                    ></v-text-field>
                    <v-text-field
                        type='password'
                        name='password'
                        label='Password'
                        outlined
                        v-model='password'
                        :rules='passwordRules'
                    ></v-text-field>
                    <v-text-field
                        type='password'
                        name='password_confirmation'
                        label='Confirm Password'
                        outlined
                        v-model='password_confirmation'
                        :rules='passwordRules'
                    ></v-text-field>
                    <v-btn
                        dark
                        @click='register'
                    >
                        登録
                    </v-btn>
                </v-card>
            </v-row>
            <v-row
                v-if='flag == 1'
                justify='center'
            >
                <v-card
                    flat
                    width='540'
                    outlined
                >
                    <v-card-title>
                        ログインの方はこちら
                    </v-card-title>
                    <v-btn dark @click='showLoginForm'>ログイン</v-btn>
                </v-card>
            </v-row>
        </v-main>
    </v-app>
</template>

<script>
    export default {
        data() {
            return{
                emailRules:[
                    v => !!v || 'メールアドレスは必須です。'
                ],
                passwordRules:[
                    v => !!v || 'パスワードは必須です。'
                ],
                userNameRules:[
                    v => !!v || 'ユーザー名は必須です。'
                ],
                flag:0
            }
        },
        methods:{
            showLoginForm(){
                this.flag = 0;
            },
            showRegisterForm(){
                this.flag = 1;
            },
            login(){
                axios({
                    url:'/login',
                    method:'post',
                    data:{
                        email:this.email,
                        password:this.password
                    }
                }).then(response=>{
                    if(response.status != 200){
                        return;
                    }
                    this.$router.push('/');
                })
            },
            register(){
                axios({
                    url:'/register',
                    method:'post',
                    data:{
                        name:this.name,
                        email:this.email,
                        password:this.password,
                        password_confirmation:this.password_confirmation
                    }
                }).then(response=>{
                    if(response.status != 200){
                        return;
                    }
                    this.$router.push('/');
                })
            }
        }
    }
</script>