import Splide from '@splidejs/splide';

export const featuredPosts = () => {
    const featuredPostsSection = document.getElementById("featured-posts");
    if (featuredPostsSection) {
        new Splide( '.featured-posts__carousel' ).mount();
    }
}