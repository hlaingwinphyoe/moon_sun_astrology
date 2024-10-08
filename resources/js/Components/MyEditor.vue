<template>
    <div v-if="editor" class="buttons editor-header">
        <button
            type="button"
            @click="editor.chain().focus().toggleBold().run()"
            :disabled="!editor.can().chain().focus().toggleBold().run()"
            :class="{
                'is-active': editor.isActive('bold'),
            }"
            class="editor-btn"
        >
            B
        </button>
        <button
            type="button"
            @click="editor.chain().focus().toggleItalic().run()"
            :disabled="!editor.can().chain().focus().toggleItalic().run()"
            :class="{
                'is-active': editor.isActive('italic'),
            }"
            class="editor-btn"
        >
            <i>I</i>
        </button>
        <button
            type="button"
            @click="editor.chain().focus().toggleUnderline().run()"
            :disabled="!editor.can().chain().focus().toggleUnderline().run()"
            :class="{
                'is-active': editor.isActive('underline'),
            }"
            class="editor-btn"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                viewBox="0 0 256 256"
            >
                <path
                    fill="currentColor"
                    d="M204 224a12 12 0 0 1-12 12H64a12 12 0 0 1 0-24h128a12 12 0 0 1 12 12m-76-28a68.07 68.07 0 0 0 68-68V56a12 12 0 0 0-24 0v72a44 44 0 0 1-88 0V56a12 12 0 0 0-24 0v72a68.07 68.07 0 0 0 68 68"
                />
            </svg>
        </button>
        <button
            type="button"
            @click="editor.chain().focus().toggleHeading({ level: 1 }).run()"
            :class="{
                'is-active': editor.isActive('heading', {
                    level: 1,
                }),
            }"
            class="editor-btn"
        >
            H1
        </button>
        <button
            type="button"
            @click="editor.chain().focus().toggleHeading({ level: 2 }).run()"
            :class="{
                'is-active': editor.isActive('heading', {
                    level: 2,
                }),
            }"
            class="editor-btn"
        >
            H2
        </button>
        <button
            type="button"
            @click="editor.chain().focus().toggleBlockquote().run()"
            :class="{ 'is-active': editor.isActive('blockquote') }"
            class="editor-btn"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                viewBox="0 0 256 256"
            >
                <path
                    fill="currentColor"
                    d="M116 72v88a48.05 48.05 0 0 1-48 48a8 8 0 0 1 0-16a32 32 0 0 0 32-32v-8H40a16 16 0 0 1-16-16V72a16 16 0 0 1 16-16h60a16 16 0 0 1 16 16m100-16h-60a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h60v8a32 32 0 0 1-32 32a8 8 0 0 0 0 16a48.05 48.05 0 0 0 48-48V72a16 16 0 0 0-16-16"
                />
            </svg>
        </button>
        <button
            type="button"
            @click="editor.chain().focus().toggleBulletList().run()"
            :class="{ 'is-active': editor.isActive('bulletList') }"
            class="editor-btn"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                viewBox="0 0 256 256"
            >
                <path
                    fill="currentColor"
                    d="M56 128a16 16 0 1 1-16-16a16 16 0 0 1 16 16M40 48a16 16 0 1 0 16 16a16 16 0 0 0-16-16m0 128a16 16 0 1 0 16 16a16 16 0 0 0-16-16m176-64H88a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h128a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8m0-64H88a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h128a8 8 0 0 0 8-8V56a8 8 0 0 0-8-8m0 128H88a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h128a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8"
                />
            </svg>
        </button>
        <button
            type="button"
            @click="editor.chain().focus().toggleOrderedList().run()"
            :class="{ 'is-active': editor.isActive('orderedList') }"
            class="editor-btn"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                viewBox="0 0 256 256"
            >
                <path
                    fill="currentColor"
                    d="M224 120v16a8 8 0 0 1-8 8H104a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h112a8 8 0 0 1 8 8m-8-72H104a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h112a8 8 0 0 0 8-8V56a8 8 0 0 0-8-8m0 128H104a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h112a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8M43.58 55.16L48 52.94V104a8 8 0 0 0 16 0V40a8 8 0 0 0-11.58-7.16l-16 8a8 8 0 0 0 7.16 14.32m36.19 101.56a23.73 23.73 0 0 0-9.6-15.95a24.86 24.86 0 0 0-34.11 4.7a23.63 23.63 0 0 0-3.57 6.46a8 8 0 1 0 15 5.47a7.84 7.84 0 0 1 1.18-2.13a8.76 8.76 0 0 1 12-1.59a7.91 7.91 0 0 1 3.26 5.32a7.64 7.64 0 0 1-1.57 5.78a1 1 0 0 0-.08.11l-28.69 38.32A8 8 0 0 0 40 216h32a8 8 0 0 0 0-16H56l19.08-25.53a23.47 23.47 0 0 0 4.69-17.75"
                />
            </svg>
        </button>
        <button
            type="button"
            @click="editor.chain().focus().setHorizontalRule().run()"
            class="editor-btn cursor-pointer"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                viewBox="0 0 24 24"
            >
                <path fill="currentColor" d="M4 13v-2h16v2z" />
            </svg>
        </button>
        <button
            type="button"
            @click="editor.chain().focus().undo().run()"
            :disabled="!editor.can().chain().focus().undo().run()"
            class="editor-btn cursor-pointer"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                viewBox="0 0 256 256"
            >
                <path
                    fill="currentColor"
                    d="M232 144a64.07 64.07 0 0 1-64 64H80a8 8 0 0 1 0-16h88a48 48 0 0 0 0-96H88v40a8 8 0 0 1-13.66 5.66l-48-48a8 8 0 0 1 0-11.32l48-48A8 8 0 0 1 88 40v40h80a64.07 64.07 0 0 1 64 64"
                />
            </svg>
        </button>
    </div>
    <EditorContent :editor="editor" />
</template>

<script>
import { Editor, EditorContent, useEditor } from "@tiptap/vue-3";
import StarterKit from "@tiptap/starter-kit";
import Underline from "@tiptap/extension-underline";
export default {
    props: ["modelValue"],
    components: {
        Editor,
        EditorContent,
        StarterKit,
    },
    emits: ["update:modelValue"],
    setup(props, { emit }) {
        const editor = useEditor({
            onUpdate: ({ editor }) => {
                emit("update:modelValue", editor.getHTML());
            },
            editorProps: {
                attributes: {
                    class: "editor-body",
                },
            },
            content: props.modelValue,
            extensions: [StarterKit, Underline],
        });

        return {
            editor,
        };
    },
};
</script>

<style></style>
