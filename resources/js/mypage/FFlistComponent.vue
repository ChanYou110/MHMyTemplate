<template>
    <v-app>
        
        <v-navigation-drawer
            app
            clipped
            mobile-breakpoint=1
        >
            <v-sheet
            class="pa-4"
            >
                <v-avatar
                    color="grey darken-1"
                    size='160'
                ></v-avatar>
            </v-sheet>
    
            <v-list>
                <v-list-item>
                    <v-list-item-content>
                        <v-list-item-title>{{user.name}}</v-list-item-title>
                        <v-list-item-title>フォロー{{user.follow_count}}</v-list-item-title>
                        <v-list-item-title>フォロワー{{user.follower_count}}</v-list-item-title>
                        <v-list-item-title>{{user.profile}}</v-list-item-title>
                        <v-btn
                            v-if='user.id != login_user.id && !user.follower_check'
                            @click='follow(user.id)'
                            dark
                        >フォロー</v-btn>
                        <v-btn
                            v-if='user.id != login_user.id && user.follower_check'
                            @click='deleteFollow(user.id)'
                        >フォロー解除</v-btn>
                        
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>
        
        <v-card>
            <v-tabs grow>
                <v-tab >フォロー</v-tab>
                <v-tab >フォロワー</v-tab>
                <v-tab-item>
                    <!--フォロー一覧-->
                    <v-container>
                        <v-row
                            v-if='user.follows[0] == null'
                        >
                            フォローしている人はいません。
                        </v-row>
                        <v-row>
                            <v-col
                                cols=12
                                md=6
                                lg=4
                            >
                                <template>
                                    <v-simple-table
                                        v-for='(follow_user, index) in user.follows'
                                        :key='follow_user.name'
                                    >
                                        <template v-slot:default>   
                                            <tbody>
                                                <tr>
                                                    <td>{{follow_user.name}}</td>
                                                    <td>
                                                        <v-btn
                                                            v-if='user.id != login_user.id && !user.follower_check'
                                                            @click='follow(user.id)'
                                                            dark
                                                        >フォロー</v-btn>
                                                        <v-btn
                                                            v-if='user.id != login_user.id && user.follower_check'
                                                            @click='deleteFollow(user.id)'
                                                        >フォロー解除</v-btn>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </template>
                                    </v-simple-table>
                                </template>
                            </v-col>
                        </v-row>
                    </v-container>
                    
                </v-tab-item>
                <v-tab-item>
                    <!--フォロワー一覧-->
                    <v-container>
                        <v-row
                            v-if='user.followers[0] == null'
                        >
                            フォロワーはいません。
                        </v-row>
                        <v-row>
                            
                        </v-row>
                    </v-container>
                    
                </v-tab-item>
            </v-tabs>
        </v-card>
    </v-app>
</template>

<script>
    export default {
        data(){
            return {
                user:{},
                login_user:{}
            }
        },
        methods:{
            getUser(){
                axios.get(`/users/${this.$route.params.id}`).then((response)=>{
                    this.user = response.data;
                })
            },
            getLoginUser(){
                axios.get('/user').then((response)=>{
                    this.login_user = response.data;
                })
            },
            follow(id){
                axios.get(`/users/follow/${id}`).then((response)=>{
                    this.getUser();
                })
            },
            deleteFollow(id){
                axios.get(`/users/unfollow/${id}`).then((response)=>{
                    this.getUser();
                })
            }
        },
        mounted() {
            this.getLoginUser();
            this.getUser();
        }
    }
</script>