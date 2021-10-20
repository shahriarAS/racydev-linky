<div class="wrap racydev_linky racydev_linky-options-div">
      <section
        class="w-full p-6 mx-auto bg-gray-800 rounded-md shadow-md dark:bg-gray-800 m-0"
      >
        <h1 class="text-xl font-bold text-white capitalize dark:text-white">
          RacyDev Linky Setting
        </h1>

        <!-- Form Error/Success Card Alert -->
        <?php settings_errors(); ?>

        <form action="options.php" method="POST">
          <!-- Wordpress Field Group -->
          <?php settings_fields("option_group") ?>

          <div class="grid grid-cols-1 gap-6 mt-4 md:grid-cols-2">
            <div>
              <label class="text-white dark:text-gray-200" for="waiting_time"
                >Waiting Time</label
              >
              <input id="waiting_time" value="<?php echo esc_html(get_option("racydev_linky_options")["waiting_time"]) ?>"
              name="waiting_time" type="number" class="block w-full px-4 py-2
              mt-2 text-gray-700 bg-white border border-gray-300 rounded-md
              dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600
              focus:border-blue-500 dark:focus:border-blue-500
              focus:outline-none focus:ring">
            </div>

            <div>
              <label class="text-white dark:text-gray-200" for="page_url"
                >Page Link</label
              >
              <input id="page_url" value="<?php echo esc_html(get_option("racydev_linky_options")["page_url"]) ?>"
              name="page_url" type="url" class="block w-full px-4 py-2 mt-2
              text-gray-700 bg-white border border-gray-300 rounded-md
              dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600
              focus:border-blue-500 dark:focus:border-blue-500
              focus:outline-none focus:ring">
            </div>

            <div>
              <label class="text-white dark:text-gray-200" for="page_btn_title"
                >Page's Button Title</label
              >
              <input id="page_btn_title" value="<?php echo esc_html(get_option("racydev_linky_options")["page_btn_title"]) ?>"
              name="page_btn_title" type="text" class="block w-full px-4 py-2
              mt-2 text-gray-700 bg-white border border-gray-300 rounded-md
              dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600
              focus:border-blue-500 dark:focus:border-blue-500
              focus:outline-none focus:ring">
            </div>
          </div>

          <div class="flex justify-end mt-6">
            <!-- Wordpress Save Button -->
            <?php submit_button("Save Options") ?>
          </div>

          <div class="text-white my-4">
            <p class="text-2xl mb-4">How to use?</p>
            <div class="flex flex-col gap-y-4">
              <p class="text-lg">
                Please read this
                <a
                  href="https://racydev.com/plugin/racydev_linky#doc"
                  target="_blank"
                  class="text-lg text-blue-500 bold"
                  >documentation</a
                >
                to know how to use
              </p>
            </div>
          </div>
        </form>
      </section>
    </div>