<template>
    <v-app>
        <v-container>
            <v-row>
                <v-col cols=12 md=6 lg=4>
                    <v-card hover>
                        <v-card-title>
                            template1 title.
                        </v-card-title>
                        <v-card-text>
                            テンプレ1内容
                        </v-card-text>
                    </v-card>
                </v-col>
                <v-col cols=12 md=6 lg=4>
                    <v-card hover>
                        <v-card-title>
                            template2 title.
                        </v-card-title>
                        <v-card-text>
                            テンプレ2内容
                        </v-card-text>
                    </v-card>
                </v-col>
                <v-col cols=12 md=6 lg=4>
                    <v-card hover>
                        <v-card-title>
                            template3 title.
                        </v-card-title>
                        <v-card-text>
                            テンプレ3内容
                        </v-card-text>
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
            }
        },
        mounted() {
            this.getWeapon();
            this.getSkill();
            this.getCharm();
            this.getEquipment();
            this.getOrnament();
        }
    }
</script>