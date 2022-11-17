
import Home from '../views/Home'
import About from '../views/About'
import Contact from '../views/Contact'
import NewNotes from '../views/notes/Create'
import TableOfNote from '../views/notes/Table'
import UpdateOfNote from '../views/notes/Update'
import ShowOfNote from '../views/notes/Show'
import EditOfNote from '../views/notes/Edit'
 
export default {
    mode: 'history',
    linkActiveClass: 'active',



    routes: [
        {

            path: '/',

            name: 'home',

            component: Home


        },
        {

            path: '/about',

            name: 'pages.about',

            component: About


        },
        {

            path: '/contact',

            name: 'pages.contact',

            component: Contact


        },
        {

            path: '/notes/create',

            name: 'pages.notes',

            component: NewNotes


        },
        {

            path: '/notes/table',

            name: 'tables.notes',

            component: TableOfNote


        },
        {

            path: '/notes/update',

            name: 'update.notes',

            component: UpdateOfNote


        },
        {

            path: '/notes/:noteSlug/show',

            name: 'show.notes',

            component: ShowOfNote


        },
        {

            path: '/notes/:noteSlug/edit',

            name: 'edit.notes',

            component: EditOfNote


        },

    ]
}