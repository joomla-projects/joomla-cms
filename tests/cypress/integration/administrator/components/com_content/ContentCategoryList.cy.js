// type definitions for Cypress object "cy"
// <reference types="cypress" />

describe('Test com_content Category features', () => {
  before(() => {
    cy.doAdministratorLogin(Cypress.env('username'), Cypress.env('password'))
  })

  it('Category', function () {
    cy.createContentCategory('Category title')
  })
})
