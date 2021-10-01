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
                    <v-list-item-icon>
                        <v-icon></v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title><router-link :to="{ name: 'myPage', params: { id: posts.user.id }}">{{ posts.user.name }}</router-link></v-list-item-title>
                        <v-list-item-title>フォロー{{posts.user.follow_count}}</v-list-item-title>
                        <v-list-item-title>フォロワー{{posts.user.follower_count}}</v-list-item-title>
                        <v-list-item-title>{{posts.user.profile}}</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>
        
        <v-container>
            <div>
                <div>{{posts.title}}</div>
                <v-spacer></v-spacer>
                <div>
                    <v-icon
                        @click.prevent='deleteLike(posts.id)'
                        v-if='posts.like_check'
                        color='red'
                    >mdi-heart
                    </v-icon>
                    <v-icon
                        @click.prevent='like(posts.id)'
                        v-else
                    >mdi-heart
                    </v-icon>
                    {{posts.count}}
                </div>
            </div>
            <div v-if='posts.weapon'>武器：{{posts.weapon.name}}</div>
            <div v-if='posts.head_equipment'>頭：{{posts.head_equipment.name}}</div>
            <div v-if='posts.chest_equipment'>胴：{{posts.chest_equipment.name}}</div>
            <div v-if='posts.arm_equipment'>腕：{{posts.arm_equipment.name}}</div>
            <div v-if='posts.waist_equipment'>腰：{{posts.waist_equipment.name}}</div>
            <div v-if='posts.leg_equipment'>脚：{{posts.leg_equipment.name}}</div>
            <div>護石</div>
            <div
                style="display:inline-flex"
                v-if='posts.charm'
            >
                <ul>
                    <li>第1スキル：</li>
                    <li>第2スキル：</li>
                    <li>スロット1：</li>
                    <li>スロット2：</li>
                    <li>スロット3：</li>
                </ul>
                <ul>
                    <li style="list-style-type:none">{{posts.charm.skill1.name}}Lv.{{posts.charm.skill1_level}}</li>
                    <li style="list-style-type:none">{{posts.charm.skill2.name}}Lv.{{posts.charm.skill2_level}}</li>
                    <li style="list-style-type:none">{{posts.charm.slot1}}個</li>
                    <li style="list-style-type:none">{{posts.charm.slot2}}個</li>
                    <li style="list-style-type:none">{{posts.charm.slot3}}個</li>
                </ul>
            </div>
            <div>装飾品</div>
            <div v-for='(ornament, index) in posts.ornaments'
                :key='ornament.name'
                style="display:inline-flex"
                v-if='posts.ornaments'
            >
                <div v-if='index != 0'>/&nbsp;</div>
                {{posts.ornaments[index].name}}×{{posts.ornaments[index].pivot.number}}
            </div>
            <div>発動スキル</div>
            <div v-for='(skill, index) in posts.skills'
                :key='skill.name'
                style="display:inline-flex"
                v-if='posts.skills'
            >
                <div v-if='index != 0'>/&nbsp;</div>
                {{posts.skills[index].name}}Lv.{{posts.skills[index].pivot.level}}
            </div>
            <div>装備説明</div>
            <div>{{posts.body}}</div>
            <div v-if='posts.user.id == user.id'>
                <v-btn @click='editPost'>編集</v-btn>
            </div>
        </v-container>
    </v-app>
</template>

<script>
    export default {
        data(){
            return {
                posts:{},
                user:{}
            }
        },
        methods:{
            getPostDetail(){
                axios.get(`/posts/${this.$route.params.id}`).then((response)=>{
                  this.posts = response.data;
                })
            },
            getLoginUser(){
                axios.get('/user').then((response)=>{
                    this.user = response.data;
                })
            },
            editPost(){
                this.$router.push({path:`/edit/${this.$route.params.id}`})
            },
            like(id){
                axios.get(`/posts/like/${id}`).then((response)=>{
                    this.getPostDetail();
                })
            },
            deleteLike(id){
                axios.get(`/posts/unlike/${id}`).then((response)=>{
                    this.getPostDetail();
                })
            },
        },
        mounted() {
            this.getPostDetail();
            this.getLoginUser();
        }
    }
</script>