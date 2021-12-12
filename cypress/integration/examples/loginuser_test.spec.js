describe('Login', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/login')
    })
    it('Login', () => {
        cy.get('#username1').type('user123')
        cy.get('#password1').type('user123')
        cy.get('#login').click()
        })
  })
describe('Login', () => {
    beforeEach(() => {
    cy.visit('http://127.0.0.1:8000/login')
    })  
})  