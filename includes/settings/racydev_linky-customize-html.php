<div class="wrap racydev_linky racydev_linky-customize-div racydev_linky-pro-div">
      <section
        class="pro-overlay w-full p-6 mx-auto bg-gray-800 rounded-md shadow-md dark:bg-gray-800 m-0"
      >
        <h1 class="text-xl font-bold text-white capitalize dark:text-white">
          RacyDev Linky Customize
        </h1>
        <form>
          <div class="grid grid-cols-1 gap-6 mt-4 md:grid-cols-2">
            <div>
              <label
                class="text-white dark:text-gray-200"
                for="passwordConfirmation"
                >Button Background Color</label
              >
              <input
                id="color"
                name="btn_bg_color"
                type="color"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
              />
            </div>
            <div>
              <label
                class="text-white dark:text-gray-200"
                for="passwordConfirmation"
                >Button Text Color</label
              >
              <input
                id="color"
                name="btn_text_color"
                type="color"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
              />
            </div>
            <div>
              <label
                class="text-white dark:text-gray-200"
                for="passwordConfirmation"
                >Timer Style</label
              >
              <select
                name="timer_style"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
              >
                <option value="horizontal">Horizontal Bar</option>
                <option value="circular">Circular Bar</option>
              </select>
            </div>
            <div>
              <label class="text-white dark:text-gray-200" for="username"
                >Timer Waiting Text</label
              >
              <input
                id="username"
                name="timer_text"
                placeholder="Please wait"
                type="text"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
              />
            </div>
            <div class="text-white">
              <label
                class="text-white dark:text-gray-200"
                for="passwordConfirmation"
                >Button Width ( px )</label
              >
              <input
                id="btn_width"
                oninput="this.nextElementSibling.value = this.value"
                name="btn_height"
                type="range"
                class="block w-full py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
              />
              <output>24</output> px
            </div>
            <div class="text-white">
              <label
                class="text-white dark:text-gray-200"
                for="passwordConfirmation"
                >Button Height ( px )</label
              >
              <input
                id="btn_height"
                oninput="this.nextElementSibling.value = this.value"
                name="btn_height"
                type="range"
                class="block w-full py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
              />
              <output>24</output> px
            </div>
            <div class="text-white">
              <label
                class="text-white dark:text-gray-200"
                for="passwordConfirmation"
                >Button Border Radius ( px )</label
              >
              <input
                id="btn_height"
                oninput="this.nextElementSibling.value = this.value"
                name="btn_height"
                type="range"
                class="block w-full py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
              />
              <output>24</output> px
            </div>
            <div>
              <label
                class="text-white dark:text-gray-200"
                for="passwordConfirmation"
                >Custom CSS</label
              >
              <textarea
                id="textarea"
                placeholder="
        .wrap {
            text-align: center;
        }"
                name="custom_css"
                rows="7"
                type="textarea"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
              ></textarea>
            </div>
          </div>

          <div class="flex justify-end mt-6">
            <button
              class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600"
            >
              Save
            </button>
          </div>
        </form>
      </section>
    </div>