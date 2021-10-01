<template>
    <v-app>
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
                posts:{},
                weapons:{},
                charms:{},
                equipment:{},
                skills:{},
                ornaments:{},
            }
        },
        methods:{
            getWeapon(){
                axios.get('/weapons').then((response)=>{
                    this.weapons = response.data;
              })
            },
            getCharm(){
                axios.get('/charms').then((response)=>{
                    this.charms = response.data;
              })
            },
            getEquipment(){
                axios.get('/equipment').then((response)=>{
                    this.equipments = response.data;
              })
            },
            getSkill(){
                axios.get('/skills').then((response)=>{
                    this.skills = response.data;
              })
            },
            getOrnament(){
                axios.get('/ornaments').then((response)=>{
                    this.ornaments = response.data;
              })
            },
            getPostLank(){
                axios.get('/lanking').then((response)=>{
                    this.posts = response.data;
                })
            }
        },
        mounted() {
            this.getWeapon();
            this.getSkill();
            this.getCharm();
            this.getEquipment();
            this.getOrnament();
            this.getPostLank();
        }
    }
</script>