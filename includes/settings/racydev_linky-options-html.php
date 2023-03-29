<div class="wrap racydev_linky racydev_linky-options-div">
      <section
        class="racydev_linky-w-full racydev_linky-p-6 racydev_linky-mx-auto racydev_linky-bg-gray-800 racydev_linky-rounded-md racydev_linky-shadow-md dark:racydev_linky-bg-gray-800 racydev_linky-m-0 racydev_link-div"
      >
        <h1 class="racydev_linky-text-xl racydev_linky-font-bold racydev_linky-text-white racydev_linky-capitalize dark:racydev_linky-text-white">
          RacyDev Linky Setting
        </h1>

        <!-- Form Error/Success Card Alert -->
        <?php settings_errors(); ?>

        <form action="options.php" method="POST">
          <!-- Wordpress Field Group -->
          <?php settings_fields("option_group") ?>

          <div class="racydev_linky-grid racydev_linky-grid-cols-1 racydev_linky-gap-6 racydev_linky-mt-4 md:racydev_linky-grid-cols-2">
            <div>
              <label class="racydev_linky-text-white dark:racydev_linky-text-gray-200" for="waiting_time"
                >Waiting Time</label
              >
              <input id="waiting_time" value="<?php echo esc_html(get_option("racydev_linky_options")["waiting_time"]) ?>"
              name="waiting_time" type="number" class="racydev_linky-block racydev_linky-w-full racydev_linky-px-4 racydev_linky-py-2
              racydev_linky-mt-2 racydev_linky-text-gray-700 racydev_linky-bg-white racydev_linky-border racydev_linky-border-gray-300 racydev_linky-rounded-md
              dark:racydev_linky-bg-gray-800 dark:racydev_linky-text-gray-300 dark:racydev_linky-border-gray-600
              focus:racydev_linky-border-blue-500 dark:focus:racydev_linky-border-blue-500
              focus:racydev_linky-outline-none focus:racydev_linky-ring">
            </div>

            <div>
              <label class="racydev_linky-text-white dark:racydev_linky-text-gray-200" for="page_url"
                >Page Link</label
              >
              <input id="page_url" value="<?php echo esc_html(get_option("racydev_linky_options")["page_url"]) ?>"
              name="page_url" type="url" class="racydev_linky-block racydev_linky-w-full racydev_linky-px-4 racydev_linky-py-2 racydev_linky-mt-2
              racydev_linky-text-gray-700 racydev_linky-bg-white racydev_linky-border racydev_linky-border-gray-300 racydev_linky-rounded-md
              dark:racydev_linky-bg-gray-800 dark:racydev_linky-text-gray-300 dark:racydev_linky-border-gray-600
              focus:racydev_linky-border-blue-500 dark:focus:racydev_linky-border-blue-500
              focus:racydev_linky-outline-none focus:racydev_linky-ring">
            </div>

            <div>
              <label class="racydev_linky-text-white dark:racydev_linky-text-gray-200" for="page_btn_title"
                >Page's Button Text</label
              >
              <input id="page_btn_title" value="<?php echo esc_html(get_option("racydev_linky_options")["page_btn_title"]) ?>"
              name="page_btn_title" type="text" class="racydev_linky-block racydev_linky-w-full racydev_linky-px-4 racydev_linky-py-2
              racydev_linky-mt-2 racydev_linky-text-gray-700 racydev_linky-bg-white racydev_linky-border racydev_linky-border-gray-300 racydev_linky-rounded-md
              dark:racydev_linky-bg-gray-800 dark:racydev_linky-text-gray-300 dark:racydev_linky-border-gray-600
              focus:racydev_linky-border-blue-500 dark:focus:racydev_linky-border-blue-500
              focus:racydev_linky-outline-none focus:racydev_linky-ring">
            </div>
          </div>

          <div class="racydev_linky-flex racydev_linky-justify-end racydev_linky-mt-6">
            <!-- Wordpress Save Button -->
            <?php submit_button("Save Options") ?>
          </div>

          <div class="racydev_linky-text-white racydev_linky-my-4">
            <p class="racydev_linky-text-2xl racydev_linky-mb-4">How to use?</p>
            <div class="racydev_linky-flex racydev_linky-flex-col racydev_linky-gap-y-4">
              <p class="racydev_linky-text-lg">
                Please read this
                <a
                  href="https://shahriarahmed.me/plugins/racydev-linky#doc"
                  target="_blank"
                  class="racydev_linky-text-lg racydev_linky-text-blue-500 bold"
                  >documentation</a
                >
                to know how to use
              </p>
            </div>
          </div>
        </form>
      </section>
    </div>