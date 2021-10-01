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
    
            <v-list v-if='user'>
                <v-list-item>
                    <v-list-item-content>
                        <v-list-item-title>{{user[0].name}}</v-list-item-title>
                        <v-list-item-title>フォロー{{user[0].follow_count}}</v-list-item-title>
                        <v-list-item-title>フォロワー{{user[0].follower_count}}</v-list-item-title>
                        <v-list-item-title>{{user[0].profile}}</v-list-item-title>
                        <v-btn
                            v-if='user[0].id != login_user.id && !user[0].follower_check'
                            @click='follow(user[0].id)'
                            dark
                        >フォロー</v-btn>
                        <v-btn
                            v-if='user[0].id != login_user.id && user[0].follower_check'
                            @click='deleteFollow(user[0].id)'
                        >フォロー解除</v-btn>
                        
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>
        
        <v-card v-if='user[0].follows'>
            <v-tabs grow>
                <v-tab >フォロー</v-tab>
                <v-tab >フォロワー</v-tab>
                <v-tab-item>
                    <!--フォロー一覧-->
                    <v-container>
                        <v-row
                            v-if='user[0].follows[0] == null'
                        >
                            フォローしている人はいません。
                        </v-row>
                        <v-row>
                            <v-col
                            >
                                <template>
                                    <v-simple-table
                                    >
                                        <template v-slot:default>   
                                            <tbody>
                                                <tr
                                                    v-for='(follow, index) in user[0].follows'
                                                    :key='follow.follow_user.name'
                                                >
                                                    <router-link 
                                                        :to="{ name: 'myPage', params: { id: follow.follow_user.id }}"
                                                    >
                                                        {{follow.follow_user.name}}
                                                    </router-link>
                                                    <!--<td>-->
                                                    <!--    <v-btn-->
                                                    <!--        v-if='follow_user.id != login_user.id && !follow_user.follower_check'-->
                                                    <!--        @click='follow(user[0].id)'-->
                                                    <!--        dark-->
                                                    <!--    >フォロー</v-btn>-->
                                                    <!--    <v-btn-->
                                                    <!--        v-if='user[0].id != login_user.id && user[0].follower_check'-->
                                                    <!--        @click='deleteFollow(user[0].id)'-->
                                                    <!--    >フォロー解除</v-btn>-->
                                                    <!--</td>-->
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
                            v-if='user[0].followers[0] == null'
                        >
                            フォロワーはいません。
                        </v-row>
                        <v-row>
                            <v-col
                            >
                                <template>
                                    <v-simple-table
                                    >
                                        <template v-slot:default>   
                                            <tbody>
                                                <tr
                                                    v-for='(follower, index) in user[0].followers'
                                                    :key='follower.follower_user.name'
                                                >
                                                    <router-link 
                                                        :to="{ name: 'myPage', params: { id: follower.follower_user.id }}"
                                                    >
                                                        {{follower.follower_user.name}}
                                                    </router-link>
                                                    <!--<td>-->
                                                    <!--    <v-btn-->
                                                    <!--        v-if='follow_user.id != login_user.id && !follow_user.follower_check'-->
                                                    <!--        @click='follow(user[0].id)'-->
                                                    <!--        dark-->
                                                    <!--    >フォロー</v-btn>-->
                                                    <!--    <v-btn-->
                                                    <!--        v-if='user[0].id != login_user.id && user[0].follower_check'-->
                                                    <!--        @click='deleteFollow(user[0].id)'-->
                                                    <!--    >フォロー解除</v-btn>-->
                                                    <!--</td>-->
                                                </tr>
                                            </tbody>
                                        </template>
                                    </v-simple-table>
                                </template>
                            </v-col>
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