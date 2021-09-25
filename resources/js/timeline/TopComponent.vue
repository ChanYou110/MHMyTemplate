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
                        <!--<v-card-text>-->
                        <!--    {{post.weapon.name}}-->
                        <!--    {{post.head_equipment.name}}-->
                        <!--    {{post.chest_equipment.name}}-->
                        <!--    {{post.arm_equipment.name}}-->
                        <!--    {{post.waist_equipment.name}}-->
                        <!--    {{post.leg_equipment.name}}-->
                        <!--</v-card-text>-->
                        <!--<v-card-text>-->
                        <!--    {{post.charm.skill1.name}}-->
                        <!--    {{post.charm.skill2.name}}-->
                        <!--    {{post.charm.slot1}}-->
                        <!--    {{post.charm.slot2}}-->
                        <!--    {{post.charm.slot3}}-->
                        <!--</v-card-text>-->
                        <!--<v-card-text>-->
                        <!--    <div v-for='(skill, index) in post.skills'-->
                        <!--        :key='skill.name'-->
                        <!--        style="display:inline-flex"-->
                        <!--    >-->
                        <!--        <div v-if='index != 0'>/&nbsp;</div>-->
                        <!--        {{post.skills[index].name}}Lv.{{post.skills[index].pivot.level}}-->
                        <!--    </div>-->
                        <!--</v-card-text>-->
                        <!--<v-card-text>-->
                        <!--    {{post.user.name}}-->
                        <!--</v-card-text>-->
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
                // weapons:{},
                // charms:[],
                // equipment:{},
                // skills:{},
                // ornaments:{},
                posts:[],
                // post_skill:{},
                // ornament_post:{}
            }
        },
        methods:{
            // getWeapon(){
            //   axios.get('/weapons').then((response)=>{
            //       this.weapons = response.data;
            //   })
            // },
            // getCharm(){
            //   axios.get('/charms').then((response)=>{
            //       this.charms = response.data;
            //   })
            // },
            // getEquipment(){
            //   axios.get('/equipment').then((response)=>{
            //       this.equipment = response.data;
            //   })
            // },
            // getSkill(){
            //   axios.get('/skills').then((response)=>{
            //       this.skills = response.data;
            //   })
            // },
            // getOrnament(){
            //   axios.get('/ornaments').then((response)=>{
            //       this.ornaments = response.data;
            //   })
            // },
            getPost(){
              axios.get('/post').then((response)=>{
                  this.posts = response.data;
              })
            },
            // getPostSkill(){
            //   axios.get('/post_skill').then((response)=>{
            //       this.post_skill = response.data;
            //   })
            // },
            // getOrnamentPost(){
            //   axios.get('/ornament_post').then((response)=>{
            //       this.ornament_post = response.data;
            //   })
            // },
        },
        mounted() {
            // this.getWeapon();
            // this.getSkill();
            // this.getCharm();
            // this.getEquipment();
            // this.getOrnament();
            this.getPost();
            // this.getPostSkill();
            // this.getOrnamentPost();
        }
    }
</script>