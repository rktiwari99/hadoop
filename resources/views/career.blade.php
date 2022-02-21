@extends('base')
@section('title', ' Career')


@section('main')
    <!-- =========================== 3. Page Header Section =========================================== -->

    <x-page-header />

    <!-- =========================== 4. Pricing Section =========================================== -->

    <section class="pricing-area">
        <div class="container">
            <div class="section-heading text-center mx-auto">
                <h2>We Are Hiring</h2>
                <p>We have people of multiple kind in the house. Together we can provide high quality work to satisfy
                    you.</p>
            </div>

            <div class="row">
                <div class="col-lg-6 wow animate__animated animate__fadeInLeft">
                    <div class="price-box">
                        <div class="job-intro">
                            <div class="price-head">
                                <svg data-name="Services We Provide" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="53" height="53"
                                    viewBox="0 0 53 53">
                                    <g data-name="1">
                                        <g>
                                            <image width="53" height="53"
                                                xlink:href="data:img/png;base64,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" />
                                        </g>
                                    </g>
                                </svg>
                                <h2>Web Developer</h2>
                            </div>
                            <div class="price">
                                <h5>Vacancy - <span>12</span></h5>
                            </div>
                        </div>
                        <div class="job-offer">
                            <div class="speciality">
                                <div class="job-text">
                                    <div class="sp-svg">
                                        <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25"
                                            viewBox="0 0 24 25">
                                            <g>
                                                <image width="24" height="25"
                                                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==">
                                                </image>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="sp-job-details">
                                        <p>Front End Developer <br>
                                            5 Years of Experience. NY - 1010, USA
                                        </p>
                                    </div>
                                    <div class="job-apply ml-auto">
                                        <a href="career.html">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="speciality">
                                <div class="job-text">
                                    <div class="sp-svg">
                                        <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25"
                                            viewBox="0 0 24 25">
                                            <g>
                                                <image width="24" height="25"
                                                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==">
                                                </image>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="sp-job-details">
                                        <p>Back End Developer <br>
                                            5 Years of Experience. NY - 1010, USA
                                        </p>
                                    </div>
                                    <div class="job-apply ml-auto">
                                        <a href="career.html">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="speciality">
                                <div class="job-text">
                                    <div class="sp-svg">
                                        <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25"
                                            viewBox="0 0 24 25">
                                            <g>
                                                <image width="24" height="25"
                                                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==">
                                                </image>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="sp-job-details">
                                        <p>Full Stack Developer <br>
                                            5 Years of Experience. NY - 1010, USA
                                        </p>
                                    </div>
                                    <div class="job-apply ml-auto">
                                        <a href="career.html">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow animate__animated animate__fadeInRight">
                    <div class="price-box">
                        <div class="job-intro">
                            <div class="price-head">
                                <svg data-name="Services We Provide" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="53" height="53"
                                    viewBox="0 0 53 53">
                                    <g data-name="1">
                                        <g>
                                            <image width="53" height="53"
                                                xlink:href="data:img/png;base64,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" />
                                        </g>
                                    </g>
                                </svg>
                                <h2>Social Media Marketer</h2>
                            </div>
                            <div class="price">
                                <h5>Vacancy - <span>06</span></h5>
                            </div>
                        </div>
                        <div class="job-offer">
                            <div class="speciality">
                                <div class="job-text">
                                    <div class="sp-svg">
                                        <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25"
                                            viewBox="0 0 24 25">
                                            <g>
                                                <image width="24" height="25"
                                                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==">
                                                </image>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="sp-job-details">
                                        <p>Facebook Marketer <br>
                                            5 Years of Experience. NY - 1010, USA
                                        </p>
                                    </div>
                                    <div class="job-apply ml-auto">
                                        <a href="career.html">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="speciality">
                                <div class="job-text">
                                    <div class="sp-svg">
                                        <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25"
                                            viewBox="0 0 24 25">
                                            <g>
                                                <image width="24" height="25"
                                                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==">
                                                </image>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="sp-job-details">
                                        <p>Twitter Marketer <br>
                                            5 Years of Experience. NY - 1010, USA
                                        </p>
                                    </div>
                                    <div class="job-apply ml-auto">
                                        <a href="career.html">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="speciality">
                                <div class="job-text">
                                    <div class="sp-svg">
                                        <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25"
                                            viewBox="0 0 24 25">
                                            <g>
                                                <image width="24" height="25"
                                                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==">
                                                </image>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="sp-job-details">
                                        <p>Linkedin Marketer <br>
                                            5 Years of Experience. NY - 1010, USA
                                        </p>
                                    </div>
                                    <div class="job-apply ml-auto">
                                        <a href="career.html">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow animate__animated animate__fadeInLeft">
                    <div class="price-box">
                        <div class="job-intro">
                            <div class="price-head">
                                <svg data-name="Services We Provide" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="53" height="53"
                                    viewBox="0 0 53 53">
                                    <g data-name="1">
                                        <g>
                                            <image width="53" height="53"
                                                xlink:href="data:img/png;base64,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" />
                                        </g>
                                    </g>
                                </svg>
                                <h2>UI / UX Designer</h2>
                            </div>
                            <div class="price">
                                <h5>Vacancy - <span>03</span></h5>
                            </div>
                        </div>
                        <div class="job-offer">
                            <div class="speciality">
                                <div class="job-text">
                                    <div class="sp-svg">
                                        <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25"
                                            viewBox="0 0 24 25">
                                            <g>
                                                <image width="24" height="25"
                                                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==">
                                                </image>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="sp-job-details">
                                        <p>App UI Designer <br>
                                            5 Years of Experience. NY - 1010, USA
                                        </p>
                                    </div>
                                    <div class="job-apply ml-auto">
                                        <a href="career.html">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="speciality">
                                <div class="job-text">
                                    <div class="sp-svg">
                                        <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25"
                                            viewBox="0 0 24 25">
                                            <g>
                                                <image width="24" height="25"
                                                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==">
                                                </image>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="sp-job-details">
                                        <p>Web UI / UX Designer <br>
                                            5 Years of Experience. NY - 1010, USA
                                        </p>
                                    </div>
                                    <div class="job-apply ml-auto">
                                        <a href="career.html">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="speciality">
                                <div class="job-text">
                                    <div class="sp-svg">
                                        <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25"
                                            viewBox="0 0 24 25">
                                            <g>
                                                <image width="24" height="25"
                                                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==">
                                                </image>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="sp-job-details">
                                        <p>Junior Product Designer <br>
                                            5 Years of Experience. NY - 1010, USA
                                        </p>
                                    </div>
                                    <div class="job-apply ml-auto">
                                        <a href="career.html">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow animate__animated animate__fadeInRight">
                    <div class="price-box">
                        <div class="job-intro">
                            <div class="price-head">
                                <svg data-name="Services We Provide" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="53" height="53"
                                    viewBox="0 0 53 53">
                                    <g data-name="1">
                                        <g>
                                            <image width="53" height="53"
                                                xlink:href="data:img/png;base64,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" />
                                        </g>
                                    </g>
                                </svg>
                                <h2>Email Marketer</h2>
                            </div>
                            <div class="price">
                                <h5>Vacancy - <span>12</span></h5>
                            </div>
                        </div>
                        <div class="job-offer">
                            <div class="speciality">
                                <div class="job-text">
                                    <div class="sp-svg">
                                        <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25"
                                            viewBox="0 0 24 25">
                                            <g>
                                                <image width="24" height="25"
                                                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==">
                                                </image>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="sp-job-details">
                                        <p>Email Template Designer <br>
                                            5 Years of Experience. NY - 1010, USA
                                        </p>
                                    </div>
                                    <div class="job-apply ml-auto">
                                        <a href="career.html">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="speciality">
                                <div class="job-text">
                                    <div class="sp-svg">
                                        <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25"
                                            viewBox="0 0 24 25">
                                            <g>
                                                <image width="24" height="25"
                                                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==">
                                                </image>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="sp-job-details">
                                        <p>Email Writer <br>
                                            5 Years of Experience. NY - 1010, USA
                                        </p>
                                    </div>
                                    <div class="job-apply ml-auto">
                                        <a href="career.html">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================== 5. Custom Project Section =========================================== -->

    <div class="custom-projects">
        <div class="container d-lg-flex align-items-center">
            <div class="section-heading">
                <h1>Custom Projects</h1>
                <p>We have people of multiple kind in the house. Together we can provide high quality work to satisfy
                    you. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="custom-project-button ml-auto">
                <button>Get A Quote</button>
            </div>
        </div>
        <div class="custom-projects-shape-2">
            <img src="assets/images/shapes/shape-02.png" alt="Habu">
        </div>
        <div class="custom-projects-circle-1">
            <img src="assets/images/shapes/shape-circle.png" class="wow animate__animated animate__pulse animate__infinite"
                alt="Habu">
        </div>
        <div class="custom-projects-circle-2">
            <img src="assets/images/shapes/shape-circle.png" alt="Habu">
        </div>
        <div class="custom-projects-circle-3">
            <img src="assets/images/shapes/shape-circle.png" class="wow animate__animated animate__pulse animate__infinite"
                alt="Habu">
        </div>
        <div class="custom-projects-circle-4"></div>
    </div>
@endsection