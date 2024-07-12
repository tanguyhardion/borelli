import { CommonModule } from '@angular/common';
import { Component, OnInit } from '@angular/core';
import { RouterOutlet } from '@angular/router';

import { MatChipsModule } from '@angular/material/chips';

import { Accordion } from '@models/accordion';
import { AccordionService } from '@services/accordion.service';
import { AccordionComponent } from '@components/accordion/accordion.component';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [CommonModule, RouterOutlet, MatChipsModule, AccordionComponent],
  templateUrl: './app.component.html',
  styleUrl: './app.component.scss',
  providers: [AccordionService],
})
export class AppComponent implements OnInit {
  accordions: Accordion[] = [];

  constructor(private accordionService: AccordionService) {}

  ngOnInit() {
    this.accordions = this.accordionService.getAccordions();
  }
}
