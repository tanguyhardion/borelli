import { CommonModule } from '@angular/common';
import { Component, Input } from '@angular/core';
import { Accordion } from '@app/models/accordion';

@Component({
  selector: 'accordion',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './accordion.component.html',
  styleUrl: './accordion.component.scss',
})
export class AccordionComponent {
  @Input() accordion: Accordion;

  getImageUrl(name: string): string {
    return `assets/${name}.jpg`;
  }
}
