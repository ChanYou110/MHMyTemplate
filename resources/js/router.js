import Router from 'vue-router';
import TopComponent from './timeline/TopComponent';
import LankComponent from './lank/LankComponent';
import SearchComponent from './search/SearchComponent';
import ActComponent from './activity/ActComponent';
import MyPageComponent from './mypage/MyPageComponent';
import PostFormComponent from './form/PostFormComponent';
import DetailComponent from './detail/DetailComponent';
import ResultComponent from './result/ResultComponent';
// import EditPostComponent from './form/EditPostComponent';
import FFlistComponent from './mypage/FFlistComponent';
import loginFormComponent from './form/loginFormComponent';
import HeaderComponent from './header/HeaderComponent';
import EditProfileComponent from './form/EditProfileComponent';

export default new Router({
    mode:'history',
    routes:[
        {
            path:'/login',
            component:loginFormComponent,
        },
        {
            path:'/',
            component:HeaderComponent,
            children:[
        
        {
            path:'/',
            component:TopComponent,
        },
        {
            path:'/lank',
            component:LankComponent,
        },
        {
            path:'/search',
            component:SearchComponent,
        },
        {
            path:'/act',
            component:ActComponent,
        },
        {
            path:'/mypage/:id',
            name:'myPage',
            props:true,
            component:MyPageComponent,
        },
        {
            path:'/mypage/:id/follow',
            name:'followIndex',
            props:true,
            component:FFlistComponent,
        },
        {
            path:'/create',
            component:PostFormComponent,
        },
        // {
        //     path:'/edit/:id',
        //     name:'postEdit',
        //     component:EditPostComponent,
        // },
        {
            path:'/detail/:id',
            name:'postDetail',
            props:true,
            component:DetailComponent,
        },
        {
            path:'users/:id/edit',
            name:'userEdit',
            component:EditProfileComponent,
        },
        ]},
    ]
})