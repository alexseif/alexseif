import { Controller } from '@hotwired/stimulus';
import EasyMDE from 'easymde';

export default class extends Controller {
    connect() {
        if (this.editor) {
            return;
        }

        const minHeight = this.element.dataset.minHeight || '320px';
        this.editor = new EasyMDE({
            element: this.element,
            minHeight,
            spellChecker: false,
            status: false,
            autofocus: false,
            toolbar: [
                'bold',
                'italic',
                'heading',
                '|',
                'quote',
                'unordered-list',
                'ordered-list',
                '|',
                'link',
                'code',
                'table',
                '|',
                'preview',
                'side-by-side',
                'fullscreen',
            ],
        });
    }

    disconnect() {
        if (this.editor) {
            this.editor.toTextArea();
            this.editor = null;
        }
    }
}
