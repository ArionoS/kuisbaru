describe('Test Button', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/login')
        
    })
    it('Login', () => {
        cy.get('#username1').type('admin123')
        cy.get('#password1').type('admin123')
        cy.get('#login').click()
        // PROSES KEDUA
        cy.get('#main').click()
       

        })
  })
describe('Test Button', () => {
    beforeEach(() => {
    cy.visit('http://127.0.0.1:8000/')
    })  
})  