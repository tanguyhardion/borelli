import { Injectable } from '@angular/core';

import { Accordion } from '@models/accordion';

@Injectable({
  providedIn: 'root',
})
export class AccordionService {
  private accordions: Accordion[] = [];

  constructor() {
    this.initAccordions();
  }

  initAccordions() {
    this.accordions = [
      new Accordion(
        'Caprice',
        '2 voix "Binci a mano" et 18 basses neutres – Hêtre laqué noir',
        3.9
      ),
      new Accordion(
        'Fancy',
        'Flat keyboard – Three voices with treble stop, 8 basses – Soft maple – Marquetry : Rosewood',
        3.6
      ),
      new Accordion(
        'Melo',
        'Deux voix "Binci a mano", 12 basses avec 1 registre – Acajou',
        3.9
      ),
      new Accordion(
        'Saulieu',
        'Trois voix – Erable – Marquetterie bois de rose',
        3.6
      ),
      new Accordion(
        'Vendôme',
        '3 voix "a mano" 5 registres – 80 basses – Merisier – (5ème rang en option)'
      ),
      new Accordion(
        'Sully',
        '19 touches 2 voix, 8 basses neutres – Erable',
        2.6
      ),
      new Accordion(
        'Béguin',
        'Deux voix "Binici a mano", 12 basses avec 1 registre – Acajou',
        4.0
      ),
      new Accordion(
        'Chambord',
        'Trois voix "Binci a mano" 5 registres, 12 basses 1 registre – Erable – Marqueterie bois de rose',
        4.95
      ),
      new Accordion(
        'Amboise',
        '3 voix "Binci a mano" 1 registre, 12 basses 1 registre – Erable – Marqueterie bois de rose',
        4.1
      ),
      new Accordion(
        'Castelet',
        '21 touches deux voix, 8 basses 1 registre – Erable – Marqueterie bois de rose',
        3.1
      ),
      new Accordion(
        'Chenonceaux',
        '2 voix "Binci a mano" 1 registre, 12 basses 1 registre – Erable – Marqueterie bois de rose',
        3.9
      ),
      new Accordion(
        'Cheverny',
        '2 voix "Binci a mano" 1 registre, 12 basses 1 registre – Erable – Marqueterie bois de rose',
        4.1
      ),
      new Accordion(
        'Polyte',
        '21 touches 2voix, 8 basses avec 1 registre – Acajou',
        3.6
      ),
      new Accordion(
        'Delight',
        'Flat keyboard – 2 voices, 8 basses – (Delight III = 3 voices with treble stop)'
      ),
    ];
  }

  getAccordions(): Accordion[] {
    return this.accordions;
  }
}

/*

Caprice
2 voix "Binci a mano" et 18 basses neutres
3.9 kgs
Hêtre laqué noir

Fancy
Flat keyboard
Three voices with treble stop, 8 basses
3.6 kgs
Soft maple
Marquetry : Rosewood

Melo
Deux voix "Binci a mano", 12 basses avec 1 registre
3.9 kgs
Acajou

Saulieu
Trois voix
3.6 kgs
Erable
Marquetterie bois de rose

Vendôme
3 voix "a mano" 5 registres
80 basses
Merisier
(5ème rang en option)

Sully
19 touches 2 voix, 8 basses neutres
2.6 kgs
Erable

Béguin
Deux voix "Binici a mano", 12 basses avec 1 registre
4.0 kgs
Acajou

Chambord
Trois voix "Binci a mano" 5 registres, 12 basses 1 registre
4.95 kgs
Erable
Marqueterie bois de rose

Amboise
3 voix "Binci a mano" 1 registre, 12 basses 1 registre
4.1 kgs
Erable
Marqueterie bois de rose

Castelet
21 touches deux voix, 8 basses 1 registre
3.1 kgs
Erable
Marqueterie bois de rose

Chenonceaux
2 voix "Binci a mano" 1 registre, 12 basses 1 registre
3.9 kgs
Erable
Marqueterie bois de rose

Cheverny
2 voix "Binci a mano" 1 registre, 12 basses 1 registre
4.1 kgs
Erable
Marqueterie bois de rose

Polyte
21 touches 2voix, 8 basses avec 1 registre
3.6 kgs
Acajou

Delight
Flat keyboard
2 voices, 8 basses
(Delight III = 3 voices with treble stop)
*/
