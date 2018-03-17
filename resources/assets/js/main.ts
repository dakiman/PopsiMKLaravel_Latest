import HomeView from './src/HomeView'
import CategoriesView from './src/CategoriesView'
import ItemsView from './src/ItemsView'
import NewsView from './src/NewsView'
import GalleryView from './src/GalleryView'

export function getHomeView(): HomeView {
    return new HomeView();
}
export function getItemsView(): ItemsView {
    return new ItemsView();
}
export function getCategoriesView(): CategoriesView {
    return new CategoriesView();
}
export function getNewsView(): NewsView {
    return new NewsView();
}
export function getGalleryView(): GalleryView {
    return new GalleryView();
}