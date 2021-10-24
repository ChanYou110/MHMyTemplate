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
                        <div>
                            
                        </div>
                        <v-list-item-title>{{user[0].name}}</v-list-item-title>
                        <v-list-item-title><router-link :to="{name: 'followIndex', params: { id: $route.params.id }} ">フォロー{{user[0].follow_count}}</router-link></v-list-item-title>
                        <v-list-item-title><router-link :to="{name: 'followIndex', params: { id: $route.params.id }} ">フォロワー{{user[0].follower_count}}</router-link></v-list-item-title>
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
                        <v-btn
                            v-if='user[0].id == login_user.id'
                            @click='openEditProfile'
                            dark
                        >プロフィール編集</v-btn>
                        
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>
        
        <v-card>
            <v-tabs grow>
                <v-tab >投稿一覧</v-tab>
                <v-tab >いいね一覧</v-tab>
                <v-tab-item>
                    
                    <v-container>
                        <v-row
                            v-if='posts[0] == null'
                        >
                            まだ投稿はありません。
                        </v-row>
                        <v-row>
                            <v-col
                                cols=12
                                md=6
                                lg=4
                                v-for='(post, index) in posts'
                                :key='post.title'
                            >
                                <v-card 
                                    hover
                                    :to="{ name: 'postDetail', params: { id: post.id }}"
                                    >
                                    <v-card-title>
                                        {{post.title}}
                                        <v-spacer></v-spacer>
                                        <div>
                                            <v-icon
                                                
                                                v-if='post.like_check'
                                                color='red'
                                            >mdi-heart
                                            </v-icon>
                                            <v-icon
                                                
                                                v-else
                                            >mdi-heart
                                            </v-icon>
                                            {{post.count}}
                                        </div>
                                    </v-card-title>
                                    <template>
                                        <v-simple-table>
                                            <template v-slot:default>   
                                                <tbody>
                                                    <tr>
                                                        <td>武器：</td>
                                                        <td>{{post.weapon.name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>頭：</td>
                                                        <td>{{post.head_equipment.name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>胴：</td>
                                                        <td>{{post.chest_equipment.name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>腕：</td>
                                                        <td>{{post.arm_equipment.name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>腰：</td>
                                                        <td>{{post.waist_equipment.name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>脚：</td>
                                                        <td>{{post.leg_equipment.name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            護石
                                                            <ul>
                                                                <li>第1スキル：</li>
                                                                <li>第2スキル：</li>
                                                                <li>スロット1：</li>
                                                                <li>スロット2：</li>
                                                                <li>スロット3：</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li style="list-style-type:none">{{post.charm.skill1.name}}Lv.{{post.charm.skill1_level}}</li>
                                                                <li style="list-style-type:none">{{post.charm.skill2.name}}Lv.{{post.charm.skill2_level}}</li>
                                                                <li style="list-style-type:none">{{post.charm.slot1}}個</li>
                                                                <li style="list-style-type:none">{{post.charm.slot2}}個</li>
                                                                <li style="list-style-type:none">{{post.charm.slot3}}個</li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </template>
                                        </v-simple-table>
                                    </template>
                                </v-card>
                            </v-col>
                        </v-row>
                    </v-container>
                    
                </v-tab-item>
                <v-tab-item>
                    <!--いいね一覧-->
                    <v-container>
                        <v-row
                            v-if='like_posts == null'
                        >
                            いいねした投稿はまだありません。
                        </v-row>
                        <v-row>
                            <v-col
                                cols=12
                                md=6
                                lg=4
                                v-for='(post, index) in like_posts'
                                :key='post.title'
                            >
                                <v-card 
                                    hover
                                    :to="{ name: 'postDetail', params: { id: post.id }}"
                                    >
                                    <v-card-title>
                                        {{post.title}}
                                        <v-spacer></v-spacer>
                                        <div>
                                            <v-icon
                                                
                                                v-if='post.like_check'
                                                color='red'
                                            >mdi-heart
                                            </v-icon>
                                            <v-icon
                                                
                                                v-else
                                            >mdi-heart
                                            </v-icon>
                                            {{post.count}}
                                        </div>
                                    </v-card-title>
                                    <template>
                                        <v-simple-table>
                                            <template v-slot:default>   
                                                <tbody>
                                                    <tr v-if='post.weapon'>
                                                        <td>武器：</td>
                                                        <td>{{post.weapon.name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>頭：</td>
                                                        <td>{{post.head_equipment.name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>胴：</td>
                                                        <td>{{post.chest_equipment.name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>腕：</td>
                                                        <td>{{post.arm_equipment.name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>腰：</td>
                                                        <td>{{post.waist_equipment.name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>脚：</td>
                                                        <td>{{post.leg_equipment.name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            護石
                                                            <ul>
                                                                <li>第1スキル：</li>
                                                                <li>第2スキル：</li>
                                                                <li>スロット1：</li>
                                                                <li>スロット2：</li>
                                                                <li>スロット3：</li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <ul>
                                                                <li style="list-style-type:none">{{post.charm.skill1.name}}Lv.{{post.charm.skill1_level}}</li>
                                                                <li style="list-style-type:none">{{post.charm.skill2.name}}Lv.{{post.charm.skill2_level}}</li>
                                                                <li style="list-style-type:none">{{post.charm.slot1}}個</li>
                                                                <li style="list-style-type:none">{{post.charm.slot2}}個</li>
                                                                <li style="list-style-type:none">{{post.charm.slot3}}個</li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </template>
                                        </v-simple-table>
                                    </template>
                                </v-card>
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
                posts:{},
                user:{},
                like_posts:{},
                login_user:{}
            }
        },
        methods:{
            getMyPost(){
                axios.get(`/posts/my-post/${this.$route.params.id}`).then((response)=>{
                    this.posts = response.data;
              })
            },
            getUser(){
                axios.get(`/users/${this.$route.params.id}`).then((response)=>{
                    this.user = response.data;
                    // console.log('this.user情報');
                    // console.log(this.user[0].name);
                })
            },
            // like(id){
            //     axios.get(`/posts/like/${id}`).then((response)=>{
            //         this.getMyLike();
            //     })
            // },
            // deleteLike(id){
            //     axios.get(`/posts/unlike/${id}`).then((response)=>{
            //         this.getMyLike();
            //     })
            // },
            getMyLike(){
                axios.get('/my-like').then((response)=>{
                    this.like_posts = response.data;
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
            },
            openEditProfile(){
                this.$router.push(`/users/${this.$route.params.id}/edit`);
            }
        },
        mounted() {
            this.getLoginUser();
            this.getMyPost();
            this.getUser();
            this.getMyLike();
        }
    }
</script>