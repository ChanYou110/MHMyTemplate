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
    
                <div>{{ user.name }}</div>
            </v-sheet>
    
            <v-list>
                <v-list-item>
                    <v-list-item-icon>
                        <v-icon></v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>{{user.profile}}</v-list-item-title>
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
                            v-if='posts == null'
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
                like_posts:{}
            }
        },
        methods:{
            getMyPost(){
                axios.get(`/my-post/${this.$route.params.id}`).then((response)=>{
                    this.posts = response.data;
              })
            },
            getUser(){
                axios.get(`/users/${this.$route.params.id}`).then((response)=>{
                    this.user = response.data;
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
            }
        },
        mounted() {
            this.getMyPost();
            this.getUser();
            this.getMyLike();
        }
    }
</script>