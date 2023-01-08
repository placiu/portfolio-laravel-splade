<x-layout>
    <x-content>
        <x-header text="Get In Touch"/>
        <div class="flex w-10/12 md:w-3/4">
            <x-paragraph>Use the form below or email me directly at <x-link href="mailto:pawel@platek.dev">pawel@platek.dev</x-link></x-paragraph>
        </div>
        <div class="">
            <x-splade-form action="{{ route('contact') }}" class="flex flex-col space-y-4 w-10/12 md:w-7/12">
                <div class="flex flex-col space-y-2">
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex items-center bg-accent pl-[1px] pt-[1px] pb-[1px] pr-[7px] w-full md:w-1/2">
                            <input v-model="form.first_name" type="text" class="bg-dark text-secondary font-mono w-full border-dark focus:border-dark focus:ring-0" placeholder="First Name *">
                        </div>
                        <span v-show="form.errors.first_name" v-text="form.errors.first_name" class="text-xs text-accent" />
                        <div class="flex items-center bg-accent pl-[1px] pt-[1px] pb-[1px] pr-[7px] w-full md:w-1/2">
                            <input v-model="form.last_name" type="text" class="bg-dark text-secondary font-mono w-full border-dark focus:border-dark focus:ring-0" placeholder="Last Name *">
                        </div>
                        <span v-show="form.errors.last_name" v-text="form.errors.last_name" class="text-xs text-accent" />
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col space-y-2 w-full">
                        <div class="flex items-center bg-accent pl-[1px] pt-[1px] pb-[1px] pr-[7px] w-full">
                            <input v-model="form.email" type="email" class="bg-dark text-secondary font-mono w-full border-dark focus:border-dark focus:ring-0" placeholder="Your Email *">
                        </div>
                        <span v-show="form.errors.email" v-text="form.errors.email" class="text-xs text-accent" />
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col space-y-2 w-full">
                        <div class="flex items-center bg-accent pl-[1px] pt-[1px] pb-[1px] pr-[7px] w-full">
                            <input v-model="form.subject" type="text" class="bg-dark text-secondary font-mono w-full border-dark focus:border-dark focus:ring-0" placeholder="Subject *">
                        </div>
                        <span v-show="form.errors.subject" v-text="form.errors.subject" class="text-xs text-accent" />
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col space-y-2 w-full">
                        <div class="flex items-center bg-accent pl-[1px] pt-[1px] pb-[7px] pr-[7px] w-full">
                            <textarea v-model="form.message" class="bg-dark text-secondary font-mono w-full h-52 max-h-56 resize-none border-dark focus:border-dark focus:ring-0" placeholder="Message *"></textarea>
                        </div>
                        <span v-show="form.errors.message" v-text="form.errors.message" class="text-xs text-accent" />
                    </div>
                </div>
                <div class="flex space-x-4 justify-end">
                    <x-buttons.button-fill type="submit">
                        <x-slot:icon>
                            <x-coolicon-mail class="h-4 w-4" />
                        </x-slot:icon>
                        Send
                    </x-buttons.button-fill>
                </div>
            </x-splade-form>
        </div>
    </x-content>
</x-layout>