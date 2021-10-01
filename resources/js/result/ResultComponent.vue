<template>
    <v-app>
        <v-app-bar>
            <v-toolbar-title>検索結果：件</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn @click='openSearch'>検索条件変更</v-btn>
        </v-app-bar>
        <v-container>
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
                        >
                        <v-card-title>
                            {{post.title}}
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
                                            <tr>
                                                <td>
                                                    {{post.user.name}}
                                                </td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </template>
                                </v-simple-table>
                            </template>
                        </v-card>
                </v-col>
            </v-row>
        </v-container>
    </v-app>
</template>

<script>
    export default {
        data(){
            return {
                posts:[],
            }
        },
        methods:{
            getPost(){
              axios.get('/post').then((response)=>{
                  this.posts = response.data;
              })
            },
            openSearch(){
                this.$router.push({path:'/search'})
            },
        },
        mounted() {
            this.getPost();
        }
    }
</script>