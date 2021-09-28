<template>
    <v-container>
    
        <v-row>
            <v-col cols=6>
                <!--<vue-simple-suggest-->
                <!--    v-model='postForm.weapon_id'-->
                <!--    :list='weapons'-->
                <!--    display-attribute='name'-->
                <!--    value-attribute='id'-->
                <!--    :filter-by-query='true'-->
                    
                <!-->
                <!--    <input type='text' placeholder='武器'>-->
                <!--</vue-simple-suggest>-->
                <v-select
                    v-model='searchForm.weapon_id'
                    :items='weapons'
                    item-text='name'
                    item-value='id'
                    label='武器'
                    dense
                >
                </v-select>
            </v-col>
            <v-col cols=6>
                <!--<vue-simple-suggest-->
                <!--    v-model='postForm.head_equipment_id'-->
                <!--    :list='headEquipment'-->
                <!--    display-attribute='name'-->
                <!--    value-attribute='id'-->
                <!--    :filter-by-query='true'-->
                    
                <!-->
                <!--    <input type='text' placeholder='頭防具'>-->
                <!--</vue-simple-suggest>-->
                <v-select
                    v-model='searchForm.head_equipment_id'
                    :items='headEquipment'
                    item-text='name'
                    item-value='id'
                    label='頭防具'
                    dense>
                </v-select>
            </v-col>
        </v-row>
        <v-row>
            <v-col cols=6>
                <!--<vue-simple-suggest-->
                <!--    v-model='postForm.chest_equipment_id'-->
                <!--    :list='chestEquipment'-->
                <!--    display-attribute='name'-->
                <!--    value-attribute='id'-->
                <!--    :filter-by-query='true'-->
                    
                <!-->
                <!--    <input type='text' placeholder='胸防具'>-->
                <!--</vue-simple-suggest>-->
                <v-select
                    v-model='searchForm.chest_equipment_id'
                    :items='chestEquipment'
                    item-text='name'
                    item-value='id'
                    label='胸防具'
                    dense
                    >
                </v-select>
            </v-col>
            <v-col cols=6>
                <!--<vue-simple-suggest-->
                <!--    v-model='postForm.arm_equipment_id'-->
                <!--    :list='armEquipment'-->
                <!--    display-attribute='name'-->
                <!--    value-attribute='id'-->
                <!--    :filter-by-query='true'-->
                    
                <!-->
                <!--    <input type='text' placeholder='腕防具'>-->
                <!--</vue-simple-suggest>-->
                <v-select
                    v-model='searchForm.arm_equipment_id'
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
                <!--<vue-simple-suggest-->
                <!--    v-model='postForm.waist_equipment_id'-->
                <!--    :list='waistEquipment'-->
                <!--    display-attribute='name'-->
                <!--    value-attribute='id'-->
                <!--    :filter-by-query='true'-->
                    
                <!-->
                <!--    <input type='text' placeholder='腰防具'>-->
                <!--</vue-simple-suggest>-->
                <v-select
                    v-model='searchForm.waist_equipment_id'
                    :items='waistEquipment'
                    item-text='name'
                    item-value='id'
                    label='腰防具'
                    dense
                    >
                </v-select>
            </v-col>
            <v-col cols=6>
                <!--<vue-simple-suggest-->
                <!--    v-model='postForm.leg_equipment_id'-->
                <!--    :list='legEquipment'-->
                <!--    display-attribute='name'-->
                <!--    value-attribute='id'-->
                <!--    :filter-by-query='true'-->
                    
                <!-->
                <!--    <input type='text' placeholder='脚防具'>-->
                <!--</vue-simple-suggest>-->
                <v-select
                    v-model='searchForm.leg_equipment_id'
                    :items='legEquipment'
                    item-text='name'
                    item-value='id'
                    label='脚防具'
                    dense>
                </v-select>
            </v-col>
        </v-row>
        <!--護石-->
        <!--<v-row>-->
        <!--    <v-col cols=3>-->
                <!--<vue-simple-suggest-->
                <!--    v-model='charmForm.skill1_id'-->
                <!--    :list='skills'-->
                <!--    display-attribute='name'-->
                <!--    value-attribute='id'-->
                <!--    :filter-by-query='true'-->
                    
                <!-->
                <!--    <input type='text' placeholder='スキル名'>-->
                <!--</vue-simple-suggest>-->
        <!--        <v-select-->
        <!--            v-model='charmForm.skill1_id'-->
        <!--            :items='skills'-->
        <!--            item-text='name'-->
        <!--            item-value='id'-->
        <!--            label='スキル名'-->
        <!--            dense>-->
        <!--        </v-select>-->
        <!--    </v-col>-->
        <!--    <v-col cols=1>-->
        <!--        <v-select-->
        <!--            v-model='charmForm.skill1_level'-->
        <!--            :items='number'-->
        <!--            label='レベル'-->
        <!--            dense-->
        <!--        ></v-select>-->
        <!--    </v-col>-->
        <!--    <v-col cols=3>-->
               <!--<vue-simple-suggest-->
               <!--     v-model='charmForm.skill2_id'-->
               <!--     :list='skills'-->
               <!--     display-attribute='name'-->
               <!--     value-attribute='id'-->
               <!--     :filter-by-query='true'-->
                    
               <!-- >
               <!--     <input type='text' placeholder='スキル名'>-->
               <!-- </vue-simple-suggest>-->
        <!--        <v-select-->
        <!--            v-model='charmForm.skill2_id'-->
        <!--            :items='skills'-->
        <!--            item-text='name'-->
        <!--            item-value='id'-->
        <!--            label='スキル名'-->
        <!--            dense>-->
        <!--        </v-select>-->
        <!--    </v-col>-->
        <!--    <v-col cols=1>-->
        <!--        <v-select-->
        <!--            v-model='charmForm.skill2_level'-->
        <!--            :items='number'-->
        <!--            label='レベル'-->
        <!--            dense-->
        <!--        ></v-select>-->
        <!--    </v-col>-->
        <!--</v-row>-->
        <!--<v-row>-->
        <!--    <v-col-->
        <!--        cols=4-->
        <!--        style="display:inline-flex"-->
        <!--    >-->
        <!--        スロット1-->
        <!--        <v-select-->
        <!--            v-model='charmForm.slot1'-->
        <!--            :items='number'-->
        <!--            label='個数'-->
        <!--            dense-->
        <!--        ></v-select>-->
        <!--    </v-col>-->
        <!--    <v-col-->
        <!--        cols=4-->
        <!--        style="display:inline-flex"-->
        <!--    >-->
        <!--        スロット2-->
        <!--        <v-select-->
        <!--            v-model='charmForm.slot2'-->
        <!--            :items='number'-->
        <!--            label='個数'-->
        <!--            dense-->
        <!--        ></v-select>-->
        <!--    </v-col>-->
        <!--    <v-col-->
        <!--        cols=4-->
        <!--        style="display:inline-flex"-->
        <!--    >-->
        <!--        スロット3-->
        <!--        <v-select-->
        <!--            v-model='charmForm.slot3'-->
        <!--            :items='number'-->
        <!--            label='個数'-->
        <!--            dense-->
        <!--        ></v-select>-->
        <!--    </v-col>-->
        <!--</v-row>-->
        <v-btn
            dark
            @click='openResult'
        >検索</v-btn>
        
        <div v-if='results'>検索結果：{{results.length}}件</div>
        
        <v-row
            v-if='results'
        >
            <v-col
                cols=12
                md=6
                lg=4
                v-for='(post, index) in results'
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
                </v-card>
            </v-col>
        </v-row>
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
                searchForm:{weapon_id:'', head_equipment_id:'', chest_equipment_id:'', arm_equipment_id:'',
                            waist_equipment_id:'',leg_equipment_id:''},
                results:{},
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
                // this.$router.push({path:'/result'})
                axios.get('/result', {params:this.searchForm}).then((response)=>{
                    this.results = response.data;
                })
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