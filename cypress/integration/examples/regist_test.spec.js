describe('Login', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/login')
        cy.get('#sign-up-btn').click()
    })
    it('Login', () => {
        cy.get('#name').type('rajendra')
        cy.get('#email').type('rajendra@codingl.com')
        cy.get('#username').type('rjndrkha')
        cy.get('#password').type('admin123')
        cy.get('#password2').type('admin123')
        cy.get('#register').click()
        })
  })
describe('Login', () => {
    beforeEach(() => {
    cy.visit('http://127.0.0.1:8000/login')
    })  
})  