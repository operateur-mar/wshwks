FILES
- index.html holds the entire content
- css/styles.css custom css styling
- js/scripts.js custom js code with settings for sliders, rotating text and more
- images folder contains all the images


PLUGINS
- Bootstrap https://getbootstrap.com/
- Purecounter https://www.cssscript.com/scroll-triggered-counter/
- ReplaceMe: https://adrianklimek.github.io/replaceme/
- Swiper https://swiperjs.com/
- Font Awesome for icons https://fontawesome.com/


IMAGES
All images are included in the download package and can be reused in your projects. The ones mentioned below come for outside resources. The ones not mentioned come from inside resources. Either way you can use them for free in your project if you want.
- Mobile app UI kit used in screenshots: https://dribbble.com/shots/2398307-Phoenix-UI-Vol-1-for-iPhone-6-Free-PSD-Sketch 
- Header section smartphones mockup: in the Resources folder
- Features section smartphone mockup: in the Resources folder and can be used for Screenshots and Download section too
- Testimonial authors: https://www.pexels.com/photo/photo-of-people-standing-near-blackboard-3184393/
- Video preview: https://www.pexels.com/photo/person-holding-silver-iphone-6-4114791/ 
- Details lightbox: https://www.pexels.com/photo/woman-in-white-t-shirt-holding-smartphone-in-front-of-laptop-914931/
- Article details image large: https://www.pexels.com/photo/photo-of-imac-near-macbook-1029757/ 
- Article details image small: https://www.pexels.com/photo/apple-office-internet-ipad-38544/


CREDITS
- Phoenix Mobile App UI Kit by Adrian Chiran: https://dribbble.com/adrianchiran  
- Images by Pexels: https://www.pexels.com/



-----------------------------------------------------


Change Testimonials Slider Properties
- Open for editing js/scripts.js
- Find the section /* Card Slider - Swiper */
- And then fiddle with the settings using the documentation here: https://swiperjs.com/swiper-api


-----------------------------------------------------


Update Statistics Number Settings
- To change the statistics numbers find the /* Counter */ section and update the data-purecounter-end="" attribute
- You can also set the speed of each counter with data-purecounter-duration="3"
- The count speed can be adjusted to have all counters finish almost at the same time
- If you give bigger numbers less time to be counted to then they will finish close the the smaller ones


-----------------------------------------------------


Change YouTube Video
- Open for editing index.html
- Find the Video section
- Then the Video Preview section
- And in this line of code
<button type="button" class="video-btn" data-bs-toggle="modal" data-bs-target="#videoModal" data-bs-src="https://www.youtube.com/embed/fLCjQJCekTs">

- Replace the YouTube video ID code "fLCjQJCekTs" with the one of your own video which you will find in the Share - Embed tab on the YouTube video page
- Replacing this image will update the Preview image: "images/video-preview.jpg"