<template>
    <v-app>
        <v-container>This is MyPageComponent.</v-container>
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