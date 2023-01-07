<x-layout>
    <x-content>
        <div class="flex flex-col w-full h-full justify-center space-y-10">
            <div class="px-20 font-sans font-extrabold">
                <span class="text-4xl text-primary">
                    Get
                </span>
                <span class="text-4xl text-accent">
                    In Touch. 
                </span>
            </div>
            <div class="flex px-20 font-sans">
                <div class="flex flex-col space-y-6 text-secondary w-3/4 leading-8 italic">
                    <p>Use the form below or email me directly at <a href="mailto:pawel@platek.dev" class="text-accent">pawel@platek.dev</a></p>
                </div>
            </div>
            <div class="pl-20 font-sans w-7/12">
                <x-splade-form action="{{ route('contact') }}" class="flex flex-col space-y-4 w-full">
                    <div class="flex flex-col space-y-2">
                        <div class="flex space-x-4">
                            <div class="flex items-center bg-accent pl-[1px] pt-[1px] pb-[1px] pr-[7px] w-1/2">
                                <input v-model="form.first_name" type="text" class="bg-dark text-secondary font-mono w-full border-dark focus:border-dark focus:ring-0" placeholder="First Name *">
                            </div>
                            <div class="flex items-center bg-accent pl-[1px] pt-[1px] pb-[1px] pr-[7px] w-1/2">
                                <input v-model="form.last_name" type="text" class="bg-dark text-secondary font-mono w-full border-dark focus:border-dark focus:ring-0" placeholder="Last Name *">
                            </div>
                        </div>
                        <span v-show="form.errors.first_name" v-text="form.errors.first_name" class="text-xs text-accent" />
                        <span v-show="form.errors.last_name" v-text="form.errors.last_name" class="text-xs text-accent" />
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
                        <button type="submit" class="flex space-x-2 px-6 py-4 bg-accent text-dark rounded">
                            <x-coolicon-mail class="h-5 w-5 text-dark" stroke="currentColor" fill="none" viewBox="0 0 24 24" />
                            <span class="font-bold uppercase text-sm">
                                Send
                            </span>
                        </button>
                    </div>
                </x-splade-form>
            </div>
        </div>
    </x-content>
</x-layout>