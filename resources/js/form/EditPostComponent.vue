<template>
    <v-container>
        <v-row>
            <v-col cols=6>
                <v-text-field
                    v-model='postForm.title'
                    label='テンプレ名'
                ></v-text-field>
            </v-col>
        </v-row>
                <v-row>
            <v-col cols=6>
                <v-autocomplete
                    v-model='postForm.weapon_id'
                    :items='weapons'
                    item-text='name'
                    item-value='id'
                    label='武器'
                    dense
                >
                </v-autocomplete>
            </v-col>
            <v-col cols=6>
                <v-autocomplete
                    v-model='postForm.head_equipment_id'
                    :items='headEquipment'
                    item-text='name'
                    item-value='id'
                    label='頭防具'
                    dense
                >
                </v-autocomplete>
            </v-col>
        </v-row>
        <v-row>
            <v-col cols=6>
                <v-autocomplete
                    v-model='postForm.chest_equipment_id'
                    :items='chestEquipment'
                    item-text='name'
                    item-value='id'
                    label='胸防具'
                    dense
                >
                </v-autocomplete>
            </v-col>
            <v-col cols=6>
                <v-autocomplete
                    v-model='postForm.arm_equipment_id'
                    :items='armEquipment'
                    item-text='name'
                    item-value='id'
                    label='腕防具'
                    dense
                >
                </v-autocomplete>
            </v-col>
        </v-row>
        <v-row>
            <v-col cols=6>
                <v-autocomplete
                    v-model='postForm.waist_equipment_id'
                    :items='waistEquipment'
                    item-text='name'
                    item-value='id'
                    label='腰防具'
                    dense
                >
                </v-autocomplete>
            </v-col>
            <v-col cols=6>
                <v-autocomplete
                    v-model='postForm.leg_equipment_id'
                    :items='legEquipment'
                    item-text='name'
                    item-value='id'
                    label='脚防具'
                    dense
                >
                </v-autocomplete>
            </v-col>
        </v-row>
        護石
        <v-row>
            <v-col cols=3>
                <v-autocomplete
                    v-model='charmForm.skill1_id'
                    :items='skills'
                    item-text='name'
                    item-value='id'
                    label='スキル名'
                    dense
                >
                </v-autocomplete>
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
                <v-autocomplete
                    v-model='charmForm.skill2_id'
                    :items='skills'
                    item-text='name'
                    item-value='id'
                    label='スキル名'
                    dense
                >
                </v-autocomplete>
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
                <v-select
                    v-model='charmForm.slot1'
                    :items='number'
                    label='スロット1の個数'
                    dense
                ></v-select>
            </v-col>
            <v-col
                cols=4
                style="display:inline-flex"
            >
                <v-select
                    v-model='charmForm.slot2'
                    :items='number'
                    label='スロット2の個数'
                    dense
                ></v-select>
            </v-col>
            <v-col
                cols=4
                style="display:inline-flex"
            >
                <v-select
                    v-model='charmForm.slot3'
                    :items='number'
                    label='スロット3の個数'
                    dense
                ></v-select>
            </v-col>
        </v-row>
        装飾品
        <v-btn
            @click='addOrnamentForm'
        >追加</v-btn>
        <v-row>
            <v-col
                cols=3
                v-for='(form, index) in ornamentForm'
                :key='index'
                style="display:inline-flex"
            >
                <v-autocomplete
                    v-model='ornamentForm[index].ornament_id'
                    :items='ornaments'
                    item-text='name'
                    item-value='id'
                    label='装飾品名'
                    dense
                >
                </v-autocomplete>
                <v-select
                    v-model='ornamentForm[index].number'
                    :items='number'
                    label='個数'
                    dense
                ></v-select>
            </v-col>
        </v-row>
        発動スキル
        <v-btn
            @click='addSkillForm'
        >追加</v-btn>
        <v-row>
            <v-col
                cols=4
                v-for='(form, index) in skillForm'
                :key='index'
                style="display:inline-flex"
            >
                <v-autocomplete
                    v-model='skillForm[index].skill_id'
                    :items='skills'
                    item-text='name'
                    item-value='id'
                    label='スキル名'
                    dense
                >
                </v-autocomplete>
                <v-select
                    v-model='skillForm[index].level'
                    :items='number'
                    label='レベル'
                    dense
                ></v-select>
            </v-col>
        </v-row>
        <v-row>
            <v-col cols=12>
                <v-textarea
                    outlined
                    v-model='postForm.body'
                    label='説明文'
                ></v-textarea>
            </v-col>
        </v-row>
        <v-btn
            dark
        >保存</v-btn>
        <v-btn
            color=red
            @click='deletePost'
        >この投稿を削除する</v-btn>
    </v-container>
</template>

<script>
    export default {
        // props:{
        //     weapon_id:{
        //         type: Number,
        //         default: 
        //     }
        // },
        data(){
            return {
                posts:{},
                weapons:[],
                charms:[],
                equipment:[],
                skills:[],
                ornaments:[],
                postForm:{},
                number:[0,1,2,3,4,5,6,7,8,9,10],
                ornamentForm:[{ornament_id:'',number:''}],
                skillForm:[{skill_id:'', level:''}],
                charmForm:{}
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
            sendPostForm(){
                axios({
                    url:`/posts/${this.$route.params.id}/update`,
                    method:'post',
                    data:{
                        postForm:this.postForm,
                        ornamentForm:this.ornamentForm,
                        skillForm:this.skillForm,
                        charmForm:this.charmForm
                    }}).then(()=>{
                    alert('変更を保存しました。');
                    // this.$router.push(`/detail/${this.$route.params.id}`);
                })
            },
            getPostDetail(){
                axios.get(`/posts/${this.$route.params.id}`).then((response)=>{
                  this.posts = response.data;
                })
            },
            deletePost(){
                axios.post(`/posts/${this.$route.params.id}/delete`).then(()=>{
                    this.$router.push(`/mypage/${this.posts.user_id}`);
                })
            },
            defaultPostForm(){
                this.postForm.weapon_id = this.posts.weapon_id;
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
        // created() {
        //     axios.get(`/posts/${this.$route.params.id}`).then((response)=>{
        //           posts = response.data;
        //           this.postForm.weapon_id = posts.weapon_id;
        //     })
        // },
        mounted() {
            this.getWeapon();
            this.getSkill();
            this.getCharm();
            this.getEquipment();
            this.getOrnament();
            // this.defaultPostForm();
            this.getPostDetail();
        }
    }
</script>