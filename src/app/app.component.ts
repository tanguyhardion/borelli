import { CommonModule } from '@angular/common';
import { Component, HostListener, OnInit } from '@angular/core';
import { RouterOutlet } from '@angular/router';

import { MatButtonModule } from '@angular/material/button';
import { MatChipsModule } from '@angular/material/chips';
import { MatIconModule } from '@angular/material/icon';

import { Accordion } from '@models/accordion';
import { AccordionService } from '@services/accordion.service';
import { AccordionComponent } from '@components/accordion/accordion.component';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [
    CommonModule,
    RouterOutlet,
    MatButtonModule,
    MatChipsModule,
    MatIconModule,
    AccordionComponent,
  ],
  templateUrl: './app.component.html',
  styleUrl: './app.component.scss',
  providers: [AccordionService],
})
export class AppComponent implements OnInit {
  accordions: Accordion[] = [];
  showScrollTopButton: boolean = false;

  constructor(private accordionService: AccordionService) {}

  ngOnInit() {
    this.accordions = this.accordionService.getAccordions();
  }

  @HostListener('window:scroll', [])
  onWindowScroll() {
    this.showScrollTopButton = window.scrollY > 300;
  }

  scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
}
