import HomeView from './src/HomeView'
import CategoriesView from './src/CategoriesView'
import ItemsView from './src/ItemsView'

export function getHomeView(): HomeView {
    return new HomeView();
}
export function getItemsView(): ItemsView {
    return new ItemsView();
}
export function getCategoriesView(): CategoriesView {
    return new CategoriesView();
}