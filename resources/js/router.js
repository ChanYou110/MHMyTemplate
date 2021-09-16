import Router from 'vue-router';
import TopComponent from './timeline/TopComponent';
import LankComponent from './lank/LankComponent';
import SerchComponent from './serch/SerchComponent';
import ActComponent from './activity/ActComponent';
import MyPageComponent from './mypage/MyPageComponent';
import PostFormComponent from './form/PostFormComponent';

export default new Router({
    mode:'history',
    routes:[
        {
            path:'/',
            component:TopComponent,
        },
        {
            path:'/lank',
            component:LankComponent,
        },
        {
            path:'/serch',
            component:SerchComponent,
        },
        {
            path:'/act',
            component:ActComponent,
        },
        {
            path:'/mypage',
            component:MyPageComponent,
        },
        {
            path:'/create',
            component:PostFormComponent,
        }
    ]
})