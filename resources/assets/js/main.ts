import HomeView from './src/HomeView'
import CategoriesView from './src/CategoriesView'

export function getHomeView(): HomeView {
    return new HomeView();
}
export function getCategoriesView(): CategoriesView {
    return new CategoriesView();
}