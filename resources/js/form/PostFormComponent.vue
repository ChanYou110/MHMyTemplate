<template>
    <v-container>
        {{skillForm}}
        <v-row>
            <v-col cols=6>
                <v-text-field
                    label='テンプレ名'
                ></v-text-field>
            </v-col>
        </v-row>
        <v-row>
            <v-col cols=6>
                <v-select
                    v-model='postForm.weapon_id'
                    :items='weapons'
                    item-text='name'
                    item-value='id'
                    label='武器'
                    dense
                >
                </v-select>
            </v-col>
            <v-col cols=6>
                <v-select
                    v-model='postForm.headEquipment_id'
                    :items='headEquipment'
                    item-text='name'
                    item-value='id'
                    label='頭防具'
                    dense
                >
                </v-select>
            </v-col>
        </v-row>
        <v-row>
            <v-col cols=6>
                <v-select
                    v-model='postForm.chestEquipment_id'
                    :items='chestEquipment'
                    item-text='name'
                    item-value='id'
                    label='胸防具'
                    dense
                >
                </v-select>
            </v-col>
            <v-col cols=6>
                <v-select
                    v-model='postForm.armEquipment_id'
                    :items='armEquipment'
                    item-text='name'
                    item-value='id'
                    label='腕防具'
                    dense
                >
                </v-select>
            </v-col>
        </v-row>
        <v-row>
            <v-col cols=6>
                <v-select
                    v-model='postForm.waistEquipment_id'
                    :items='waistEquipment'
                    item-text='name'
                    item-value='id'
                    label='腰防具'
                    dense
                >
                </v-select>
            </v-col>
            <v-col cols=6>
                <v-select
                    v-model='postForm.legEquipment_id'
                    :items='legEquipment'
                    item-text='name'
                    item-value='id'
                    label='脚防具'
                    dense
                >
                </v-select>
            </v-col>
        </v-row>
        護石
        <v-row>
            <v-col cols=3>
                <v-select
                    v-model='postForm.charm_skill1_id'
                    :items='skills'
                    item-text='name'
                    item-value='id'
                    label='スキル名'
                    dense
                >
                </v-select>
            </v-col>
            <v-col cols=1>
                    <v-select
                    :items='number'
                    label='レベル'
                    dense
                >
                </v-select>
            </v-col>
            <v-col cols=3>
                <v-select
                    v-model='postForm.charm_skill2_id'
                    :items='skills'
                    item-text='name'
                    item-value='id'
                    label='スキル名'
                    dense
                >
                </v-select>
            </v-col>
            <v-col cols=1>
                    <v-select
                    :items='number'
                    label='レベル'
                    dense
                >
                </v-select>
            </v-col>
            <v-col cols=3>
                <v-select
                    v-model='postForm.charm_skill3_id'
                    :items='skills'
                    item-text='name'
                    item-value='id'
                    label='スキル名'
                    dense
                >
                </v-select>
            </v-col>
            <v-col cols=1>
                    <v-select
                    :items='number'
                    label='レベル'
                    dense
                >
                </v-select>
            </v-col>
            <v-col
                cols=4
                style="display:inline-flex"
            >
                スロット1
                    <v-select
                    :items='number'
                    label='個数'
                    dense
                >
                </v-select>
            </v-col>
            <v-col
                cols=4
                style="display:inline-flex"
            >
                スロット2
                    <v-select
                    :items='number'
                    label='個数'
                    dense
                >
                </v-select>
            </v-col>
            <v-col
                cols=4
                style="display:inline-flex"
            >
                スロット3
                    <v-select
                    :items='number'
                    label='個数'
                    dense
                >
                </v-select>
            </v-col>
        </v-row>
        装飾品
        <v-row>
            <v-col cols=2>
                <v-select
                    v-model='postForm.ornament_id'
                    :items='ornaments'
                    item-text='name'
                    item-value='id'
                    label='装飾品名'
                    dense
                >
                </v-select>
            </v-col>
            <v-col cols=1>
                    <v-select
                    :items='number'
                    label='個数'
                    dense
                >
                </v-select>
            </v-col>
        </v-row>
        発動スキル
        <v-btn
            @click='addSkillForm'
        >
            追加
        </v-btn>
        <v-row>
            <v-col
                cols=4
                v-for='(form, index) in skillForm'
                :key='index'
                style="display:inline-flex"
            >
                <v-select
                    v-model='skillForm[index].name'
                    :items='skills'
                    item-text='name'
                    item-value='id'
                    label='スキル名'
                    dense
                >
                </v-select>
                <v-select
                    v-model='skillForm[index].skill'
                    :items='number'
                    label='レベル'
                    dense
                >
                </v-select>
            </v-col>
        </v-row>
        <v-row>
            <v-col cols=12>
                <v-textarea
                    outlined
                    label='説明文'
                ></v-textarea>
            </v-col>
        </v-row>
        <v-btn
            dark
        >投稿</v-btn>
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
                number:[1,2,3,4,5,6,7,8,9,10],
                skillForm:[{name:'', skill:''}]
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
                    name:'',
                    skill:''
                }
                this.skillForm.push(baseSkillForm);
            },
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