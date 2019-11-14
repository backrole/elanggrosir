<!--Modal-->
  <div class="tw-modal tw-opacity-0 tw-pointer-events-none tw-fixed tw-w-full tw-h-full tw-top-0 tw-left-0 tw-py-24 tw-flex tw-items-center tw-justify-center">
    <div class="tw-modal-overlay tw-absolute tw-w-full tw-h-full tw-bg-gray-900 tw-opacity-50"></div>

    <div class="tw-modal-container tw-bg-white md:tw-max-w-6xl md:tw-max-h-full tw-my-64 tw-mx-auto tw-rounded tw-shadow-lg tw-z-50 tw-overflow-auto">

      <div class="tw-modal-close tw-absolute tw-top-0 tw-right-0 tw-cursor-pointer tw-flex tw-flex-col tw-items-center tw-mt-4 tw-mr-4 tw-text-white tw-text-sm tw-z-50">
        <svg class="tw-fill-current tw-text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="tw-text-sm">(Esc)</span>
      </div>

      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="tw-modal-content tw-py-4 tw-text-left tw-px-6">
        <!--Title-->
        <div class="tw-flex tw-justify-between tw-items-center tw-pb-3">
          <div class="tw-text-2xl tw-font-bold tw-mx-3" id="modal-title">Tambah</div>
          <div class="tw-modal-close tw-cursor-pointer tw-z-50">
            <svg class="tw-fill-current tw-text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

        <!--Body-->
        <div class="tw-p-3" id="modal-body">

        </div>
        <!--Footer-->
        <div class="tw-flex tw-justify-end tw-pt-2">
            <button class="tw-px-4 tw-bg-green-500 tw-p-3 tw-rounded-lg tw-text-white tw-font-semibold hover:tw-bg-green-400 tw-mr-2" id="modal-save" >Action</button>
            <button class="tw-modal-close tw-px-4 tw-bg-red-500 tw-p-3 tw-rounded-lg tw-text-white tw-font-semibold hover:tw-bg-red-400">Batal</button>
        </div>

      </div>
    </div>
  </div>
