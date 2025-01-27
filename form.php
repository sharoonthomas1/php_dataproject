<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form</title>
    <link href="./assets/output.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/assets/custom.css">
  </head>
  <body>
        <!-- navbar -->
        <header>
        <nav class="left-0 top-0 backdrop-blur-sm w-full z-10 md:bg-transparent">
          <div
            class="flex flex-wrap items-center justify-between mx-auto px-[5%] py-4 border-b-[1px] border-solid border-[#2E2929]"
          >
            <a href="/" class="flex items-center space-x-3"
              ><svg
                width="18"
                height="29"
                viewBox="0 0 18 29"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M14.0023 4.86847C14.0023 4.27515 13.7658 3.70609 13.3447 3.2863L11.7281 1.67969L2.31641 11.0521C1.84958 11.5162 1.47921 12.0673 1.22652 12.674C0.973819 13.2808 0.84375 13.9312 0.84375 14.588C0.84375 15.2448 0.973819 15.8952 1.22652 16.502C1.47921 17.1087 1.84958 17.6598 2.31641 18.1238L3.89702 19.7011C3.69238 18.727 3.73484 17.7175 4.02053 16.7639C4.30622 15.8102 4.82614 14.9425 5.53327 14.2393L13.3447 6.45065C13.7658 6.03086 14.0023 5.4618 14.0023 4.86847ZM13.3424 11.0375C13.7649 11.4609 14.0022 12.0347 14.0022 12.6329C14.0022 13.2312 13.7649 13.805 13.3424 14.2284L9.38858 18.1839C8.8241 18.7451 8.37672 19.4129 8.07241 20.1486C7.76811 20.8842 7.61295 21.673 7.61595 22.4692C7.61692 22.8845 7.65997 23.2986 7.74446 23.7053L6.18599 22.1033C5.23793 21.1533 4.70544 19.8658 4.70544 18.5235C4.70544 17.1811 5.23793 15.8936 6.18599 14.9437L11.7279 9.40254L13.3424 11.0375ZM13.3021 22.7473C13.5238 22.9594 13.7 23.2126 13.8202 23.492C13.9405 23.7714 14.0024 24.0714 14.0024 24.3745C14.0024 24.6776 13.9405 24.9776 13.8202 25.257C13.7 25.5365 13.5238 25.7896 13.3021 26.0017L11.6954 27.5671L10.0621 25.9692C9.16557 25.092 8.63499 23.9208 8.57339 22.6831C8.51179 21.4454 8.92357 20.2295 9.72873 19.2716L13.3021 22.7473Z"
                  fill="white"
                ></path>
              </svg>
              <span class="text-[#fff] text-[30px] font-bold">website</span></a
            >
            <div class="flex items-center gap-5" id="navbar-default">
              <a href=""
                ><img
                  src="/assets/images/discord-logo.gif"
                  alt="discord-gif"
                  class="h-[43px] w-auto" /></a
              ><button class="flex h-6 w-6 items-center md:hidden">
                <svg
                  width="23"
                  height="16"
                  viewBox="0 0 23 16"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M1.125 1.25H21.4375"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                  ></path>
                  <path
                    d="M7.89587 8.02083H21.4375"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                  ></path>
                  <path
                    d="M1.125 14.7917H21.4375"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                  ></path>
                </svg>
              </button>
              <div class="items-center gap-5 hidden md:flex">
                <a href="todo.html" class="text-[15px] font-semibold text-[#fff]"
                  >To Do App</a
                ><a href="Table.php" class="text-[15px] font-semibold text-[#fff]"
                  >Table</a
                >
                <a href="/form.php">
                  <button
                  class="rounded-lg bg-transparent border-[1px] border-[#fff] px-[20px] py-[8px] text-[15px] font-normal text-[#D2A8FF] md:mt-0 flex"
                >
                  Sign in
                </button>
                </a>
              </div>
            </div>
          </div>
        </nav>
      </header>
    <section class="w-5/12 m-auto py-28">
      <h1 class="text-[#fff] text-center text-xl">Registration Form</h1>
      <form id="registrationForm" class="form" action="formsubmit.php" method="POST" enctype="multipart/form-data">
        <div class="input-box">
          <label for="fullName">Full Name</label>
          <input id="fullName" type="text" placeholder="Enter full name" required name="full_name"/>
        </div>

        <div class="input-box">
          <label for="email">Email Address</label>
          <input id="email" type="email" placeholder="Enter email address" required name="email" />
        </div>

        <div class="input-box">
          <label for="password">Password</label>
          <input id="password" type="password" placeholder="Enter Password" required name="password"/>
        </div>

        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" value="male" checked name="gender"/>
              <label for="check-male">Male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" value="female" name="gender"/>
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" value="other" name="gender" />
              <label for="check-other">Prefer not to say</label>
            </div>
          </div>
        </div>

        <div class="hobbies-box py-4">
          <h3 class="text-white mb-4">Hobbies</h3>
          <div class="hobbies-option space-y-2 flex gap-x-4 items-center">
            <div class="hobby">
              <input type="checkbox" id="hobby-reading" name="hobbies" value="Reading" />
              <label for="hobby-reading" class="text-white ml-2">Reading</label>
            </div>
            <div class="hobby">
              <input type="checkbox" id="hobby-traveling" name="hobbies" value="Traveling" />
              <label for="hobby-traveling" class="text-white ml-2">Traveling</label>
            </div>
            <div class="hobby">
              <input type="checkbox" id="hobby-music" name="hobbies" value="Music" />
              <label for="hobby-music" class="text-white ml-2">Music</label>
            </div>
            <div class="hobby">
              <input type="checkbox" id="hobby-sports" name="hobbies" value="Sports" />
              <label for="hobby-sports" class="text-white ml-2">Sports</label>
            </div>
          </div>
        </div>
   <div class="">
   <label for="image" class="text-[#fff] ">Upload an Image</label>
   <input type="file" name="image" accept="image/jpeg, image/png" required class='upload '>
   </div>
        <button type="submit">Submit</button>
      </form>
    </section>
    <script src="/assets/script.js"></script>
  </body>
</html>
