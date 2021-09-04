import Router from 'vue-router';
import ExampleComponent from './components/ExampleComponent'
import Example1Component from './details/Example1Component'

export default new Router({
    mode:'history',
    routes:[
        {
            path:'/',
            component:ExampleComponent,
        },
        {
            path:'/1',
            component:Example1Component,
        },
        ]
})
