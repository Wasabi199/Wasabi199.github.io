<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Portfolio</title>
</head>

<body>
    <div class="">
        <nav class="flex px-5 justify-between w-full  h-14 2xl:h-16 bg-slate-900 fixed ">
            <a href="#home" class="flex">
                <div class="text-4xl m-auto text-yellow-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 2xl:w-14 2xl:h-14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                    </svg>
                </div>
                <div class=" font-extrabold text-transparent bg-clip-text text-4xl 2xl:text-4xl m-auto bg-yellow-500">Portfolio</div>
            </a>
            <div class="flex">
                <ul class="flex m-auto gap-x-5 text-lg 2xl:text-2xl font-bold">
                    <li class="text-yellow-500 cursor-pointer hover:underline">
                        <a href="#Home">Home</a>
                    </li>
                    <li class="text-yellow-500 cursor-pointer hover:underline">
                        <a href="#AboutMe">About Me</a>
                    </li>
                    <li class="text-yellow-500 cursor-pointer hover:underline">
                        <a href="#Education">Education</a>
                    </li>
                    <li class="text-yellow-500 cursor-pointer hover:underline">
                        <a href="#Projects">Projects</a>
                    </li>
                </ul>
            </div>

        </nav>
        <div class="bg-no-repeat bg-fixed bg-cover" style="background-image:url('Partials/assets/background.png')">
            <div class="w-full">
                <div id="Home" class=" m-auto flex min-h-screen h-fit w-full pt-40 2xl:pt-36 ">
                    <div class="w-1/2 ml-10 text-slate-800 font-[Arial] ">
                        <div class="p-2 w-fit bg-yellow-500 text-lg 2xl:text-3xl rounded-t-lg rounded-r-lg font-bold">Hello I'm</div>
                        <div class="text-4xl 2xl:text-8xl font-extrabold ">Ryan Villanueva</div>
                        <div class="text-2xl 2xl:text-5xl font-extrabold">System Developer</div>
                        <div class="mt-10">
                            <div class="flex h-fit justify-start ">
                                <div class="h-6 w-6 2xl:h-10 2xl:w-10 mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                                    </svg>
                                </div>
                                <div class="ml-5 font-bold text-lg 2xl:text-3xl">rylo.villanueva.up@phinmaed.com</div>
                            </div>
                            <div class="flex h-fit justify-start">
                                <div class="h-6 w-6 2xl:h-10 2xl:w-10 mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                    </svg>
                                </div>
                                <div class="ml-5 font-bold text-lg 2xl:text-3xl">+63-0910-8928-391</div>
                            </div>
                            <div class="flex h-fit justify-start">
                                <div class="h-6 w-6 2xl:h-10 2xl:w-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z" />
                                    </svg>
                                </div>
                                <div class="ml-5 font-bold text-lg 2xl:text-3xl">Dagupan Pangasinan, Philippines</div>
                            </div>
                            <div class="flex w-full  h-fit mt-10 2xl:mt-10 2xl:mb-10 pl-20 pr-20 border-2 bg-slate-900  p-3 rounded-lg">
                                <div class="m-auto text-yellow-500">
                                    <a href="https://www.facebook.com/ryan.villanueva.9212/">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-facebook w-9/12 2xl:w-full" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg>
                                    </a>
                                </div>

                                <div class="m-auto text-yellow-500">
                                    <a href="https://github.com/Wasabi199">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-github w-9/12 2xl:w-full" viewBox="0 0 16 16">
                                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class=" m-auto text-yellow-500">
                                    <a href="https://www.linkedin.com/in/ryan-villanueva-867714153/">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-linkedin w-9/12 2xl:w-full" viewBox="0 0 16 16">
                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <img class="border-8 w-5/12 2xl:w-1/3 border-gray-800  m-auto rounded-full " src="Partials/assets/profile.png" />
                </div>
                <div id="AboutMe">
                    <div class="flex h-fit pt-40 w-full p-14  bg-slate-900">
                        <div class="w-1/2 h-fit m-auto">
                            <img class="w-full rounded-lg" src="Partials/assets/programmer.gif" />
                        </div>
                        <div class="w-1/2 m-auto ml-5 p-5">
                            <div class="text-slate-300 font-[Arial] font-bold text-4xl 2xl:text-6xl">About Me</div>
                            <p class="text-slate-300 text-xl 2xl:text-4xl mt-5">Hi good day, I'm Ryan Villanueva a software and web developer from the Philippines. I'm always willing to learn and open in any comments about my work. A flexible and hard-working person and I have knowledge on:</p>
                            <div class=" grid grid-cols-auto grid-cols-4 gap-2 2xl:gap-4 w-full  mt-5 ">
                                <span class="text-center rounded-md border-yellow-500 border-2 text-yellow-500 text-lg 2xl:text-4xl">CSS</span>
                                <span class="text-center rounded-md border-yellow-500 border-2 text-yellow-500 text-lg 2xl:text-4xl">PHP</span>
                                <span class="text-center rounded-md border-yellow-500 border-2 text-yellow-500 text-lg 2xl:text-4xl">JavaScript</span>
                                <span class="text-center rounded-md border-yellow-500 border-2 text-yellow-500 text-lg 2xl:text-4xl">HTML</span>
                                <span class="text-center rounded-md border-yellow-500 border-2 text-yellow-500 text-lg 2xl:text-4xl">Vue</span>
                                <span class="text-center rounded-md border-yellow-500 border-2 text-yellow-500 text-lg 2xl:text-4xl">Laravel</span>
                                <span class="text-center rounded-md border-yellow-500 border-2 text-yellow-500 text-lg 2xl:text-4xl">MySQL</span>
                                <span class="text-center rounded-md border-yellow-500 border-2 text-yellow-500 text-lg 2xl:text-4xl">Firebase</span>
                                <span class="text-center rounded-md border-yellow-500 border-2 text-yellow-500 text-lg 2xl:text-4xl">Flutter</span>
                                <span class="text-center rounded-md border-yellow-500 border-2 text-yellow-500 text-lg 2xl:text-4xl">Android</span>
                            </div>
                        </div>
                    </div>
                    <div class="h-fit pt-32 w-full  p-8  bg-slate-900 pb-10">
                        <div class="w-full m-auto text-center pt-10 mb-5 ">
                            <span class=" text-4xl font-semibold font-[Arial] text-slate-300 2xl:text-6xl">What I Do</span>
                        </div>
                        <div class="flex gap-5">
                            <div class="w-1/3 rounded-lg bg-slate-800 h-full text-slate-300 border-2 border-yellow-500">
                                <div class="p-3 text-yellow-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-display m-auto w-28 2xl:w-full" viewBox="0 0 16 16">
                                        <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z" />
                                    </svg>
                                </div>
                                <div class="p-3 w-fit m-auto text-yellow-500 font-bold text-2xl font-[Arial] 2xl:text-4xl">Front End Development</div>
                                <p class="p-5 text-lg 2xl:text-3xl ">I am new in frontend development and still learning and expanding my knowledge. I have experience in some adaptive UX/UI on the web using HTML, CSS, and JavaScript. I have done some mobile Frontend using Flutter and Android Studio.</p>
                            </div>
                            <div class="w-1/3 rounded-lg bg-slate-800 h-full text-slate-300 border-2 border-yellow-500">
                                <div class="p-3 text-yellow-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-code-square m-auto  w-28 2xl:w-full" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                        <path d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z" />
                                    </svg>
                                </div>
                                <div class="p-3 w-fit m-auto text-yellow-500 font-bold text-2xl font-[Arial] 2xl:text-4xl">Back End Development</div>
                                <p class="p-5 text-lg 2xl:text-3xl">I have experience in Back-End Development. I can Implement functions and APIs needed in a project. I have experience in Back-End Development using Java, Python, PHP, Flutter, Rest API also Firebase, and MySQL as databases. also, I am efficient in using the Laravel as framework.</p>
                            </div>
                            <div class="w-1/3 rounded-lg bg-slate-800 h-full text-slate-300 border-2 border-yellow-500">
                                <div class="p-3 text-yellow-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-phone m-auto  w-28 2xl:w-full" viewBox="0 0 16 16">
                                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    </svg>
                                </div>
                                <div class="p-3 w-fit m-auto text-yellow-500 font-bold text-2xl font-[Arial] 2xl:text-4xl">Mobile Development</div>
                                <p class="p-5 text-lg 2xl:text-3xl">I have experience in Mobile Development. I tried to Develop in Flutter and Android Studio as a Framework and can use Rest API. As for my skills, I can Front-End and Back-End in mobile development. I still want to learn and grow my skills in Mobile development.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Education" class="flex gap-10 h-fit min-h-screen w-full px-5 pt-20 bg-slate-900 pb-10">
                    <div class="w-1/2  pt-10 mb-5 ">
                        <span class=" text-4xl font-semibold font-[Arial] text-slate-300 2xl:text-6xl">Education</span>
                        <div class="h-fit w-full p-5 bg-slate-800 rounded-lg mt-5  border-2 border-yellow-500">
                            <span class="text-slate-300 font-bold text-lg font-[Arial] 2xl:text-4xl">PHINMA University of Pangasinan </span>
                            <br>
                            <span class="text-yellow-500 font-bold font-[Arial] 2xl:text-3xl">BS Information Technology</span>
                            <br>
                            <div class="text-yellow-500 font-[Arial] font-xs mt-5 mb-5 2xl:text-2xl">
                                <span>
                                    2020-Current
                                </span>
                                <br>
                                <span>
                                    College
                                </span>
                            </div>
                            <p class="text-slate-300 2xl:text-2xl">The PHINMA – University of Pangasinan, also known as UPang, is a private and non-sectarian university located at Dagupan, Pangasinan, Philippines. It is a member of the PHINMA Education Network. It offers practically all undergraduate and graduate courses that Metro Manila universities offer.</p>
                        </div>
                        <div class="h-fit w-full p-5 bg-slate-800 rounded-lg mt-5  border-2 border-yellow-500">
                            <span class="text-slate-300 font-bold text-lg font-[Arial] 2xl:text-4xl">Lyceum North-Western University</span>
                            <br>
                            <span class=" text-yellow-500 font-bold font-[Arial] 2xl:text-3xl">Information and Communication Technology</span>
                            <br>
                            <div class="text-yellow-500 font-[Arial] font-xs mt-5 mb-5 2xl:text-2xl">
                                <span>
                                    2018-2020
                                </span>
                                <br>
                                <span>
                                    Senior High School
                                </span>
                            </div>
                            <p class="text-slate-300 2xl:text-2xl">Lyceum-Northwestern University is a medical college located in Dagupan City, Philippines founded by Dr. Francisco Quimson Duque and Mrs. Florencia Tiongson Duque in 1969.</p>
                        </div>
                        <div class="h-fit w-full p-5 bg-slate-800 rounded-lg mt-5  border-2 border-yellow-500">
                            <span class="text-slate-300 font-bold text-lg font-[Arial] 2xl:text-4xl">JJDVSTVSS</span>
                            <!-- <br> -->
                            <!-- <span class="text-slate-300 font-bold font-[Arial]">Information and Communication Technology</span> -->
                            <br>
                            <div class="text-yellow-500 font-[Arial] font-xs mt-5 mb-5 2xl:text-2xl">
                                <span>
                                    2018-2020
                                </span>
                                <br>
                                <span>
                                    Junior High School
                                </span>
                            </div>
                            <!-- <p class="text-slate-300 2xl:text-2xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro laboriosam ipsa, asperiores dolor minus tempore quae architecto id consequuntur itaque dignissimos facilis nesciunt aut doloremque atque dicta sapiente iusto. Quia.</p> -->
                        </div>
                        <div class="h-fit w-full p-5 bg-slate-800 rounded-lg mt-5  border-2 border-yellow-500">
                            <span class="text-slate-300 font-bold text-lg font-[Arial] 2xl:text-4xl">Salisay Elementary School</span>
                            <!-- <br> -->
                            <!-- <span class="text-slate-300 font-bold font-[Arial]">Information and Communication Technology</span> -->
                            <br>
                            <div class="text-yellow-500 font-[Arial] font-xs mt-5 mb-5 2xl:text-2xl">
                                <span>
                                    2018-2020
                                </span>
                                <br>
                                <span>
                                    Elementary
                                </span>
                            </div>
                            <!-- <p class="text-slate-300 2xl:text-2xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro laboriosam ipsa, asperiores dolor minus tempore quae architecto id consequuntur itaque dignissimos facilis nesciunt aut doloremque atque dicta sapiente iusto. Quia.</p> -->
                        </div>
                    </div>
                    <div class="w-1/2  pt-10 mb-5 ">
                        <span class=" text-4xl font-bold font-[Arial]  text-slate-300 2xl:text-6xl">Seminar/Webinar</span>
                        <div class="h-fit w-full p-5 bg-slate-800 rounded-lg mt-5 border-2 border-yellow-500 ">
                            <span class="text-yellow-500 font-bold text-lg font-[Arial] 2xl:text-4xl">Funky Flutter</span>
                            <img class="m-auto w-72" src="Partials/assets/p1.png" />
                        </div>
                        <div class="h-fit w-full p-5 bg-slate-800 rounded-lg mt-5  border-2 border-yellow-500 ">
                            <span class="text-yellow-500 font-bold text-lg font-[Arial] 2xl:text-4xl">Photography and Videography</span>
                            <img class="m-auto w-72" src="Partials/assets/p2.jpg" />
                        </div>
                        <div class="h-fit w-full p-5 bg-slate-800 rounded-lg mt-5  border-2 border-yellow-500">
                            <span class="text-yellow-500 font-bold text-lg font-[Arial] 2xl:text-4xl">Firebase in Action</span>
                            <img class="m-auto w-72" src="Partials/assets/p3.jpg" />
                        </div>
                        <div class="h-fit w-full p-5 bg-slate-800 rounded-lg mt-5  border-2 border-yellow-500">
                            <span class="text-yellow-500 font-bold text-lg font-[Arial] 2xl:text-4xl">Home Brew</span>
                            <img class="m-auto w-72" src="Partials/assets/p4.jpg" />
                        </div>
                        <div class="h-fit w-full p-5 bg-slate-800 rounded-lg mt-5  border-2 border-yellow-500">
                            <span class="text-yellow-500 font-bold text-lg font-[Arial] 2xl:text-4xl">Developer Student Club</span>
                            <img class="m-auto w-72" src="Partials/assets/p5.jpg" />
                        </div>
                        <div class="h-fit w-full p-5 bg-slate-800 rounded-lg mt-5  border-2 border-yellow-500">
                            <span class="text-yellow-500 font-bold text-lg font-[Arial] 2xl:text-4xl">Computer Networking Essentials</span>
                            <img class="m-auto w-72" src="Partials/assets/p6.png" />
                        </div>
                    </div>
                </div>
                <div id="Projects" class="gap-10 h-fit min-h-screen w-full pl-5 pt-28 pr-5 bg-slate-900 pb-10">
                    <div class="font-[Arial] font-bold text-4xl w-full text-center text-slate-300 2xl:text-6xl">Recent Projects</div>
                    <div class="grid grid-cols-2 grid-flow-auto gap-1 pt-16 w-full m-auto">

                        <?php
                        include 'Partials/includes/dbconfig.php';

                        $storage = $firebase->createStorage();
                        $storageClient = $storage->getStorageClient();
                        $defaultBucket = $storage->getBucket();

                        $expiresAt = new DateTime('tomorrow', new DateTimeZone('Asia/Manila'));

                        $projects =  $database->getReference('projects')->getValue();
                        foreach ($projects as $ts => $info) {
                            $imageReference = $defaultBucket->object('Projects/' . $info['profile']);
                            if ($imageReference->exists()) {
                                $image = $imageReference->signedUrl($expiresAt);
                            }
                            echo <<<HTML
                            <div class=" min-h-98 gap-x-2 rounded-lg p-5 bg-slate-800 border-2 border-yellow-500 gap-2">
                                    <div class="w-72 m-auto">
                                        <img class="max-h-72 m-auto" src="{$image}" />
                                    </div>
                                    <div class="text-center font-semibold text-4xl text-slate-300">{$info['title']}</div>
                            <div class="flex">
                                    <div class="w-full">
                                        <p class="text-slate-300 text-xl">{$info['description']}</p>
                                        </div>
                                    <div  class="my-auto">
                                        <a href="{$info['link']}">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="h-20 w-20">
                                                <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            HTML;
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
