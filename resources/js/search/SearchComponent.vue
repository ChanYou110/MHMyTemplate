<template>
    <v-container>
        <v-row>
            <v-col cols=6>
                <v-select
                    v-model='postForm.weapon_id'
                    :items='weapons'
                    item-text='name'
                    item-value='id'
                    label='武器'
                    dense
                ></v-select>
            </v-col>
            <v-col cols=6>
                <v-select
                    v-model='postForm.head_equipment_id'
                    :items='headEquipment'
                    item-text='name'
                    item-value='id'
                    label='頭防具'
                    dense
                ></v-select>
            </v-col>
        </v-row>
        <v-row>
            <v-col cols=6>
                <v-select
                    v-model='postForm.chest_equipment_id'
                    :items='chestEquipment'
                    item-text='name'
                    item-value='id'
                    label='胸防具'
                    dense
                ></v-select>
            </v-col>
            <v-col cols=6>
                <v-select
                    v-model='postForm.arm_equipment_id'
                    :items='armEquipment'
                    item-text='name'
                    item-value='id'
                    label='腕防具'
                    dense
                ></v-select>
            </v-col>
        </v-row>
        <v-row>
            <v-col cols=6>
                <v-select
                    v-model='postForm.waist_equipment_id'
                    :items='waistEquipment'
                    item-text='name'
                    item-value='id'
                    label='腰防具'
                    dense
                ></v-select>
            </v-col>
            <v-col cols=6>
                <v-select
                    v-model='postForm.leg_equipment_id'
                    :items='legEquipment'
                    item-text='name'
                    item-value='id'
                    label='脚防具'
                    dense
                ></v-select>
            </v-col>
        </v-row>
        護石
        <v-row>
            <v-col cols=3>
                <v-select
                    v-model='charmForm.skill1_id'
                    :items='skills'
                    item-text='name'
                    item-value='id'
                    label='スキル名'
                    dense
                ></v-select>
            </v-col>
            <v-col cols=1>
                <v-select
                    v-model='charmForm.skill1_level'
                    :items='number'
                    label='レベル'
                    dense
                ></v-select>
            </v-col>
            <v-col cols=3>
                <v-select
                    v-model='charmForm.skill2_id'
                    :items='skills'
                    item-text='name'
                    item-value='id'
                    label='スキル名'
                    dense
                ></v-select>
            </v-col>
            <v-col cols=1>
                <v-select
                    v-model='charmForm.skill2_level'
                    :items='number'
                    label='レベル'
                    dense
                ></v-select>
            </v-col>
        </v-row>
        <v-row>
            <v-col
                cols=4
                style="display:inline-flex"
            >
                スロット1
                <v-select
                    v-model='charmForm.slot1'
                    :items='number'
                    label='個数'
                    dense
                ></v-select>
            </v-col>
            <v-col
                cols=4
                style="display:inline-flex"
            >
                スロット2
                <v-select
                    v-model='charmForm.slot2'
                    :items='number'
                    label='個数'
                    dense
                ></v-select>
            </v-col>
            <v-col
                cols=4
                style="display:inline-flex"
            >
                スロット3
                <v-select
                    v-model='charmForm.slot3'
                    :items='number'
                    label='個数'
                    dense
                ></v-select>
            </v-col>
        </v-row>
        <v-btn
            dark
            @click='openResult'
        >検索</v-btn>
        
        <!--<v-row>-->
        <!--    <v-col cols=6>-->
        <!--        <v-select-->
        <!--            v-model='postForm.weapon_id'-->
        <!--            :items='filterWeapons'-->
        <!--            item-text='name'-->
        <!--            item-value='id'-->
        <!--            label='武器'-->
        <!--            dense-->
        <!--        ><input v-model='filterText'></v-select>-->
        <!--    </v-col>-->
        <!--</v-row>-->
        
    </v-container>
</template>

<script>
    export default {
        data(){
            return {
                weapons:[],
                charms:[],
                equipment:[],
                skills:[],
                ornaments:[],
                postForm:{},
                number:[0,1,2,3,4,5,6,7,8,9,10],
                ornamentForm:[{ornament_id:'',number:''}],
                skillForm:[{skill_id:'', level:''}],
                charmForm:{},
                // fitertText:''
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
                  this.equipment = response.data;
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
            addSkillForm(){
                var baseSkillForm={
                    skill_id:'',
                    level:''
                }
                this.skillForm.push(baseSkillForm);
            },
            addOrnamentForm(){
                var baseOrnamentForm={
                    ornament_id:'',
                    number:''
                }
                this.ornamentForm.push(baseOrnamentForm);
            },
            openResult(){
                this.$router.push({path:'/result'})
            }
        },
        computed:{
            headEquipment(){
                if(!this.equipment){
                    return;
                }
                return this.equipment.filter(value=>value.part_id==1);
            },
            chestEquipment(){
                if(!this.equipment){
                    return;
                }
                return this.equipment.filter(value=>value.part_id==2);
            },
            armEquipment(){
                if(!this.equipment){
                    return;
                }
                return this.equipment.filter(value=>value.part_id==3);
            },
            waistEquipment(){
                if(!this.equipment){
                    return;
                }
                return this.equipment.filter(value=>value.part_id==4);
            },
            legEquipment(){
                if(!this.equipment){
                    return;
                }
                return this.equipment.filter(value=>value.part_id==5);
            },
            // filterWeapons(){
            //     return this.weapons.filter(v=>v.mach(this.filterText));
            // },
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