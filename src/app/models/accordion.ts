export class Accordion {
  name: string;
  description: string;
  weight: number | undefined;

  constructor(
    name: string,
    description: string,
    weight: number | undefined = undefined
  ) {
    this.name = name;
    this.description = description;
    this.weight = weight;
  }
}
