@extends('base')
@section('title', ' Web Development')


@section('main')
    <!-- =========================== 3. Page Header Section =========================================== -->

    <x-page-header />

    <!-- =========================== 4. Contact Section =========================================== -->

    <section class="speciality-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 speciality-text wow animate__animated animate__fadeInLeft animate__delay-1s">
                <div class="section-heading w-100 mb-28 mt-0">
                        <h2>Lorem Ipsum Dolor</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s .</p>
                        <!-- <p style = 'text-align:justify;'>Wismad is one of UK’s leading Web design company specialising in bespoke website design and development.
                            Our customer focused team expertise in providing best business solutions and ensuring 100% customer satisfaction.</p> -->
                    </div>
                    <div class="speciality">
                        <div class="sp-text">
                            <!-- <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25" viewBox="0 0 24 25">
                                <g>
                                    <image width="24" height="25"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==" />
                                </g>
                            </svg> -->
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="speciality">
                        <div class="sp-text">
                            <!-- <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25" viewBox="0 0 24 25">
                                <g>
                                    <image width="24" height="25"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==" />
                                </g>
                            </svg> -->
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                        </div>
                    </div>
                    <div class="speciality">
                        <div class="sp-text">
                            <!-- <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25" viewBox="0 0 24 25">
                                <g>
                                    <image width="24" height="25"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==" />
                                </g>
                            </svg> -->
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing consectetur.</p>
                        </div>
                    </div>
                    <div class="speciality">
                        <div class="sp-text">
                            <!-- <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25" viewBox="0 0 24 25">
                                <g>
                                    <image width="24" height="25"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==" />
                                </g>
                            </svg> -->
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                        </div>
                    </div>
                    <div class="speciality">
                        <div class="sp-text">
                            <!-- <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25" viewBox="0 0 24 25">
                                <g>
                                    <image width="24" height="25"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==" />
                                </g>
                            </svg> -->
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing dolor sit amet.</p>
                        </div>
                    </div>
                    <div class="speciality">
                        <div class="sp-text">
                            <!-- <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25" viewBox="0 0 24 25">
                                <g>
                                    <image width="24" height="25"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==" />
                                </g>
                            </svg> -->
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing dolor sit amet.</p>
                        </div>
                    </div>
                    <!-- <a href=" {{ url('contact-us') }} " class="wow animate__animated animate__flipInX large-blue-button mt-40 speciality-button">Contact Us</a> -->
                </div>
                <div class="col-xl-5 col-lg-6 about-area-image wow animate__animated animate__fadeInRight animate__delay-1s">
                    <img src="assets/images/banner/01_home_banner_img.png" alt="Habu">
                </div>
            </div>
        </div>
    </section>


    <section class="speciality-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-6 about-area-image wow animate__animated animate__fadeInLeft animate__delay-1s">
                    <img src="assets/images/banner/02_home_banner_bg.png" alt="Habu">
                </div>
                <div class="col-lg-6 speciality-text wow animate__animated animate__fadeInRight animate__delay-1s">
                    <div class="section-heading w-100 mb-28 mt-0">
                        <h2>Lorem Ipsum Dolor</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s .</p>
                    </div>
                    <div class="speciality">
                        <div class="sp-text">
                            <!-- <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25" viewBox="0 0 24 25">
                                <g>
                                    <image width="24" height="25"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==" />
                                </g>
                            </svg> -->
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="speciality">
                        <div class="sp-text">
                            <!-- <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25" viewBox="0 0 24 25">
                                <g>
                                    <image width="24" height="25"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==" />
                                </g>
                            </svg> -->
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                        </div>
                    </div>
                    <div class="speciality">
                        <div class="sp-text">
                            <!-- <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25" viewBox="0 0 24 25">
                                <g>
                                    <image width="24" height="25"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==" />
                                </g>
                            </svg> -->
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing consectetur.</p>
                        </div>
                    </div>
                    <div class="speciality">
                        <div class="sp-text">
                            <!-- <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25" viewBox="0 0 24 25">
                                <g>
                                    <image width="24" height="25"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==" />
                                </g>
                            </svg> -->
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                        </div>
                    </div>
                    <div class="speciality">
                        <div class="sp-text">
                            <!-- <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25" viewBox="0 0 24 25">
                                <g>
                                    <image width="24" height="25"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==" />
                                </g>
                            </svg> -->
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing dolor sit amet.</p>
                        </div>
                    </div>
                    <div class="speciality">
                        <div class="sp-text">
                            <!-- <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25" viewBox="0 0 24 25">
                                <g>
                                    <image width="24" height="25"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==" />
                                </g>
                            </svg> -->
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing dolor sit amet.</p>
                        </div>
                    </div>
                    <!-- <a href=" {{ url('contact-us') }} " class="wow animate__animated animate__flipInX large-blue-button mt-40 speciality-button">Contact Us</a> -->
                </div>
            </div>
        </div>
    </section>




    <section class="services-area">
        <div class="container">
            <!-- <div class="section-heading">
                <h1>Lorem Ipsum Dolor</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s .</p>
            </div> -->
            <!-- <div class="row">
                <div class="col-xl-6 col-md-6 ml-auto thumbnail1 wow animate__animated animate__slideInUp">
                    !-- <img src="assets/images/blog/post-details.png" alt="Habu"> --
                </div>
                <div class="col-xl-6 col-md-6 ml-auto thumbnail1 wow animate__animated animate__slideInUp">
                    <img src="assets/images/blog/post-03.png" alt="Habu">
                </div>
            </div> -->

            <div class="row">
                <div class="col-xl-4 col-md-6 mx-auto wow animate__animated animate__slideInUp">
                    <div class="service-box">
                        <div class="service-image">
                            <svg data-name="Services We Provide"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="53"
                                height="53" viewBox="0 0 53 53">
                                <g id="_1" data-name="1">
                                    <g id="item">
                                    
                                        <image id="coding-language" width="51" height="51"
                                            xlink:href="data:img/png;base64,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" />                                    
                                    
                                   
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="service-text">
                            <h1>Sed Perspiciatis Unde</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  bibendum non egestas tempor aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mx-auto wow animate__animated animate__slideInUp">
                    <div class="service-box">
                        <div class="service-image">
                            <svg data-name="Services We Provide" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="51" height="51" viewBox="0 0 51 51">
                                <g id="_2" data-name="2">
                                    <g>
                                        <image id="design" width="49" height="55"
                                            xlink:href="data:img/png;base64,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" />
                                    </g>
                                </g>
                            </svg>

                        </div>
                        <div class="service-text">
                            <h1>Finibus Bonorum Neque</h1>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mx-auto wow animate__animated animate__slideInUp">
                    <div class="service-box">
                        <div class="service-image">
                            <svg data-name="Services We Provide" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="49" height="55" viewBox="0 0 49 55">
                                <g id="_3" data-name="3">
                                    <g>

                                            
                                        <image id="meeting" width="53" height="53"
                                            xlink:href="data:img/png;base64,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" />                                            
                                            
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="service-text">
                            <h1>Maecenas Tempor Quam</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum placerat varius dui vitae interdum. </p>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>

    <!-- =========================== 5. Custom Project Section =========================================== -->
    
    <x-custome-project />
@endsection