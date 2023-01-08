<x-layout>
    <x-content>
        <x-header text="Get In Touch"/>
        <div class="flex w-10/12 lg:w-9/12">
            <x-paragraph>
                Use the form below or email me directly at <x-link href="mailto:{{ env('MAIL_USERNAME') }}">{{ env('MAIL_USERNAME') }}</x-link>
            </x-paragraph>
        </div>
        <x-splade-form action="{{ route('contact') }}" class="flex flex-col gap-2 w-11/12 lg:w-9/12">
            <x-form.row class="md:flex-row">
                <x-form.input-wrapper class="md:w-1/2">
                    <x-form.input-text v-model="form.first_name" placeholder="First Name *" />
                </x-form.input-wrapper>
                <x-form.validation-error v-show="form.errors.first_name" v-text="form.errors.first_name" />
                <x-form.input-wrapper class="md:w-1/2">
                    <x-form.input-text v-model="form.last_name" placeholder="Last Name *" />
                </x-form.input-wrapper>
                <x-form.validation-error v-show="form.errors.last_name" v-text="form.errors.last_name" />
            </x-form.row>
            <x-form.row>
                <x-form.input-wrapper>
                    <x-form.input-text v-model="form.email" placeholder="Your E-mail *" />
                </x-form.input-wrapper>
                <x-form.validation-error v-show="form.errors.email" v-text="form.errors.email" />
            </x-form.row>
            <x-form.row>
                <x-form.input-wrapper>
                    <x-form.input-text v-model="form.subject" placeholder="Subject *" />
                </x-form.input-wrapper>
                <x-form.validation-error v-show="form.errors.subject" v-text="form.errors.subject" />
            </x-form.row>
            <x-form.row>
                <x-form.input-wrapper>
                    <x-form.textarea v-model="form.message" placeholder="Message *"></x-form.textarea>
                </x-form.input-wrapper>
                <x-form.validation-error v-show="form.errors.message" v-text="form.errors.message" />
            </x-form.row>
            <div class="flex justify-end">
                <x-buttons.button-fill type="submit">
                    <x-slot:icon>
                        <x-coolicon-mail class="h-4 w-4" />
                    </x-slot:icon>
                    Send
                </x-buttons.button-fill>
            </div>
        </x-splade-form>
    </x-content>
</x-layout>