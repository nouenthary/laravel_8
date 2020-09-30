import Layout from "../components/layout";
import Chart from "../components/Chart";
import SignIn from "../page/SignIn";
import MainLayout from "../components/MainLayout";

export const router = [
    {
        key: '1',
        path: '/',
        component: Layout
    },
    {
        key: '2',
        path: '/Chart',
        component: Chart
    },
    {
        key: '3',
        path: '/signin',
        component: SignIn
    },
    {
        key: '4',
        path: '/MainLayout',
        component: MainLayout
    }
];
